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
    <body class="font-display text-tcg_dark antialiased tcg-bg-gradient min-h-screen h-screen">
        <div class="container mx-auto my-5">
            <div class="shadow-xl">
                @include('_partials.nav')
                <div class="bg-tcg_white min-h-full h-full px-10 py-5">
                    <h1>{{ $page->title }}</h1>
                    @yield('body')
                </div>
            </div>
        </div>
    </body>
</html>
