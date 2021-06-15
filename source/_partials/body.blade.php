<div id="content" class="bg-tcg_white shadow-inner">
    <div class="mx-8 py-6 text-lg">
        @if (isset($title))
            <h1>{{ $title }}</h1>
            <span class="text-sm">{{ $subtitle }}</span>
            <hr>
        @endif
        @yield('body')
    </div>
</div>
