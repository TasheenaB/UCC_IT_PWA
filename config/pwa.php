<?php

// PWA settings for the UCC IT app (erag/laravel-pwa)
// after changing the manifest part run: php artisan erag:update-manifest

return [

    // show the install button on the pages
    'install-button' => true,

    'manifest' => [
        'name' => 'UCC IT Department',
        'short_name' => 'UCC IT',
        'background_color' => '#0a3a8f',
        'display' => 'standalone',
        'description' => 'Faculty directory, courses and admissions for the UCC Department of Information Technology.',
        'theme_color' => '#0a3a8f',
        'icons' => [
            [
                'src' => 'logo.png',
                'sizes' => '512x512',
                'type' => 'image/png',
            ],
        ],
        // screenshots for the richer install window in Chrome (one wide and one narrow)
        'screenshots' => [
            [
                'src' => 'screenshots/home-wide.png',
                'sizes' => '1280x720',
                'type' => 'image/png',
                'form_factor' => 'wide',
                'label' => 'Home screen on desktop',
            ],
            [
                'src' => 'screenshots/home-narrow.png',
                'sizes' => '540x720',
                'type' => 'image/png',
                'form_factor' => 'narrow',
                'label' => 'Home screen on mobile',
            ],
        ],
    ],

    // show console.log messages from the service worker when debugging
    'debug' => env('APP_DEBUG', false),

    'livewire-app' => false,
];
