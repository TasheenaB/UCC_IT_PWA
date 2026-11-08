"use strict";

// Service worker for the UCC IT app
// Based on the erag/laravel-pwa one but I added caching so the pages work offline too

const CACHE_NAME = "ucc-it-cache-v2";
const OFFLINE_URL = "/offline.html";

// files saved when the app is first installed
const filesToCache = [
    OFFLINE_URL,
    "/",
    "/directory",
    "/courses",
    "/admissions",
    "/social",
    "/css/style.css",
    "/js/app.js",
    "/logo.png"
];

self.addEventListener("install", (event) => {
    event.waitUntil(
        caches.open(CACHE_NAME).then((cache) => {
            // add one by one so one failed file does not stop everything
            return Promise.all(
                filesToCache.map((url) => cache.add(url).catch(() => {}))
            );
        })
    );
    self.skipWaiting();
});

self.addEventListener("fetch", (event) => {
    // only handle normal GET requests from this site
    if (event.request.method !== "GET" || !event.request.url.startsWith(self.location.origin)) {
        return;
    }

    if (event.request.mode === "navigate") {
        // pages: try the network first, save a copy, use the cached copy when offline
        event.respondWith(
            fetch(event.request)
                .then((response) => {
                    const copy = response.clone();
                    caches.open(CACHE_NAME).then((cache) => cache.put(event.request, copy));
                    return response;
                })
                .catch(() => {
                    return caches.match(event.request).then((cached) => {
                        return cached || caches.match(OFFLINE_URL);
                    });
                })
        );
    } else {
        // css, js, images: try the network first (so changes show up), use the cache when offline
        event.respondWith(
            fetch(event.request)
                .then((networkResponse) => {
                    const copy = networkResponse.clone();
                    caches.open(CACHE_NAME).then((cache) => cache.put(event.request, copy));
                    return networkResponse;
                })
                .catch(() => caches.match(event.request))
        );
    }
});

self.addEventListener("activate", (event) => {
    event.waitUntil(
        caches.keys().then((cacheNames) => {
            return Promise.all(
                cacheNames.map((cacheName) => {
                    if (cacheName !== CACHE_NAME) {
                        return caches.delete(cacheName);
                    }
                })
            );
        }).then(() => self.clients.claim())
    );
});
