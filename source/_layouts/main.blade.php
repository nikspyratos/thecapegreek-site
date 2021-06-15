<!DOCTYPE html>
<html lang="{{ $page->language ?? 'en' }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="canonical" href="{{ $page->getUrl() }}">
        <meta name="description" content="{{ $page->site_description }}">
        <title>{{ $page->title }} | {{ $page->head_title }}</title>
        <link rel="stylesheet" href="{{ mix('css/main.css', 'assets/build') }}">
        <script defer src="{{ mix('js/main.js', 'assets/build') }}"></script>
        <link rel="icon" href="/favicon.ico"><!-- 32×32 -->
        <link rel="icon" href="/icon-192.png" type="image/svg+xml">
        <link rel="apple-touch-icon" href="/apple-touch-icon.png"><!-- 180×180 -->
        <link rel="manifest" href="/manifest.webmanifest">
    </head>
    <body class="font-display text-tcg_dark antialiased bg-fixed bg-tcg_dark tcg-bg-gradient">
        <div class="container mx-auto my-16 relative">
            <div class="h-full shadow-lg rounded-xl">
                @include('_partials.header')
                @yield('content')
                @include('_partials.footer')
            </div>
        </div>
    </body>
</html>
