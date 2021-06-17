<div id="content" class="bg-tcg_white shadow-inner">
    <div class="mx-8 py-6 text-lg">
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
</div>
