<!DOCTYPE html>
<html lang="{{ $page->language ?? 'en' }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="canonical" href="{{ $page->getUrl() }}">
        <meta name="description" content="{{ $page->description }}">
        <title>{{ $page->title }} | {{ $page->head_title }}</title>
        <link rel="stylesheet" href="{{ mix('css/main.css', 'assets/build') }}">
        <script defer src="{{ mix('js/main.js', 'assets/build') }}"></script>
    </head>
    <body class="font-display text-tcg_dark antialiased bg-fixed tcg-bg-gradient">
        <div class="container mx-auto my-16 relative">
            <div class="h-full shadow-lg rounded-xl">
                @include('_partials.nav')
                @include('_partials.body')
                @include('_partials.footer')
            </div>
        </div>
    </body>
</html>
