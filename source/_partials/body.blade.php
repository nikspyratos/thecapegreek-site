<main id="content" class="bg-tcg_dark shadow-inner py-6 text-lg">
    <div class="mx-8">
        @if (isset($previous) || isset($next))
            @include('_partials.previous-next', ['type' => 'top', 'previous' => $previous ?? null, 'next' => $next ?? null])
        @endif
        @if (isset($title))
            <h1>{{ $title }}</h1>
            <span class="text-sm">{{ $subtitle }}</span>
        @endif
        @yield('body')
        @if (isset($previous) || isset($next))
            @include('_partials.previous-next', ['type' => 'bottom', 'previous' => $previous ?? null, 'next' => $next ?? null])
        @endif
    </div>
</main>
