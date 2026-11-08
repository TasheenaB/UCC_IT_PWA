@extends('layouts.app')

@section('title', 'Social Media - UCC IT Department')
@section('heading', 'Social Media')

@section('content')
    <p class="intro">Follow UCC on social media.</p>

    <!-- tabs to switch between the 3 accounts (each one has its icon) -->
    <div class="tabs">
        <button class="tab tab-facebook active" data-target="facebook">
            <svg class="icon" viewBox="0 0 24 24" aria-hidden="true"><path fill="currentColor" d="M13.5 21v-7.5h2.6l.4-3h-3V8.6c0-.9.3-1.5 1.6-1.5h1.5V4.4c-.3 0-1.2-.1-2.2-.1-2.2 0-3.7 1.3-3.7 3.8v2.4H8v3h2.7V21z"/></svg>
            <span>Facebook</span>
        </button>
        <button class="tab tab-twitter" data-target="twitter">
            <svg class="icon" viewBox="0 0 24 24" aria-hidden="true"><path fill="currentColor" d="M18.2 3h3l-6.6 7.5L22.4 21h-6.1l-4.8-6.2L6 21H3l7-8L2.6 3h6.3l4.3 5.7zM17.1 19.2h1.7L7.9 4.7H6.1z"/></svg>
            <span>X (Twitter)</span>
        </button>
        <button class="tab tab-instagram" data-target="instagram">
            <svg class="icon" viewBox="0 0 24 24" aria-hidden="true"><rect x="3" y="3" width="18" height="18" rx="5" fill="none" stroke="currentColor" stroke-width="2"/><circle cx="12" cy="12" r="4" fill="none" stroke="currentColor" stroke-width="2"/><circle cx="17.3" cy="6.7" r="1.3" fill="currentColor"/></svg>
            <span>Instagram</span>
        </button>
    </div>

    <!-- Facebook (page plugin) -->
    <div class="panel active" id="facebook">
        <iframe
            src="https://www.facebook.com/plugins/page.php?href={{ urlencode($facebook) }}&tabs=timeline&width=340&height=600&small_header=true&adapt_container_width=true&hide_cover=false&show_facepile=false"
            width="100%" height="600" style="border:none;overflow:hidden" scrolling="no"
            allowfullscreen="true"
            allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share"
            title="UCC Facebook page"></iframe>
        <a href="{{ $facebook }}" target="_blank" rel="noopener" class="open-link link-facebook">Open Facebook page</a>
    </div>

    <!-- X / Twitter (timeline widget) -->
    <div class="panel" id="twitter">
        <a class="twitter-timeline" data-height="600" href="{{ str_replace('x.com', 'twitter.com', $twitter) }}">Posts by UCC</a>
        <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
        <a href="{{ $twitter }}" target="_blank" rel="noopener" class="open-link link-twitter">Open X page</a>
    </div>

    <!-- Instagram (embed) -->
    <div class="panel" id="instagram">
        <iframe src="{{ rtrim($instagram, '/') }}/embed" width="100%" height="600"
                style="border:none;" scrolling="no" title="UCC Instagram page"></iframe>
        <a href="{{ $instagram }}" target="_blank" rel="noopener" class="open-link link-instagram">Open Instagram page</a>
    </div>

    <p class="note">These need an internet connection to load.</p>
@endsection
