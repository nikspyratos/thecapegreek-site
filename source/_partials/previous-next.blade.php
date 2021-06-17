@php
    $margin = 'mb-8';
    if ($type == 'bottom') {
        $margin = '';
    }
    $justify = 'between';
    if (isset($previous) && !isset($next)) {
        $justify = 'start';
    }
    if (!isset($previous) && isset($next)) {
        $justify = 'end';
    }
@endphp

@if($type == 'bottom')
    <hr>
@endif
<div class="flex flex-wrap flex-row justify-center md:justify-{{ $justify }} {{ $margin }}">
    @if (isset($previous))
        <div class="w-full md:w-auto flex place-items-center justify-center">
            <div>
                <img
                        class="w-12 h-12"
                        src="{{ getSvgIcon('tcg_green', 'arrow-left') }}" alt="left arrow"
                />
            </div>
            <div>
                <a href="{{ $previous->getPath() }}">{{ $previous->title }}</a>
            </div>
        </div>
    @endif
    @if (isset($next))
        <div class="w-full md:w-auto flex place-items-center justify-center">
            <div>
                <a href="{{ $next->getPath() }}">{{ $next->title }}</a>
            </div>
            <div>
                <img
                        class="w-12 h-12"
                        src="{{ getSvgIcon('tcg_light_blue', 'arrow-right') }}" alt="left arrow"
                />
            </div>
        </div>
    @endif
</div>
@if($type == 'top')
    <hr>
@endif
