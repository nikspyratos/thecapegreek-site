<!DOCTYPE html>
<html lang="{{ $page->siteLanguage ?? 'en' }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="canonical" href="{{ $page->getUrl() }}">
        <meta name="description" content="{{ $page->description ?? $page->siteDescription }}">
        <meta name=”robots” content="index, follow">
        <title>{{ $page->title }} | {{ $page->siteName }}</title>
        <link rel="stylesheet" href="{{ mix('css/main.css', 'assets/build') }}">
{{--        <script defer src="{{ mix('js/main.js', 'assets/build') }}"></script>--}}
        <link rel="icon" href="/favicon.ico"><!-- 32×32 -->
        <link rel="icon" href="/icon-192.png" type="image/svg+xml">
        <link rel="apple-touch-icon" href="/apple-touch-icon.png"><!-- 180×180 -->
        <link rel="manifest" href="/manifest.webmanifest">
        <link rel="alternate" type="application/rss+xml" title="{{ $page->siteName }}" href="{{ $page->baseUrl.'/rss.xml' }}" />
    </head>
    <body class="font-display text-tcg_dark antialiased flex content-center bg-fixed bg-tcg_dark tcg-bg-gradient">
        <div class="max-w-content mx-auto sm:my-5 shadow-bevel rounded-xl">
            @include('_partials.header')
            @yield('content')
            @include('_partials.footer')
        </div>
    </body>
</html>
