@php
    $margin = 'mb-8';
    if ($type == 'bottom') {
        $margin = '';
    }
    $justify = 'md:justify-between';
    if (isset($previous) && !isset($next)) {
        $justify = 'md:justify-start';
    }
    if (!isset($previous) && isset($next)) {
        $justify = 'md:justify-end';
    }
@endphp

@if($type == 'bottom')
    <hr>
@endif
<div class="flex flex-wrap flex-row justify-center {{ $justify }} {{ $margin }}">
    @if (isset($previous))
        <div class="w-full md:w-1/2 mb-4 sm:mb-0 flex items-center justify-center md:justify-start">
            <div>
                <img
                        class="w-12 h-12"
                        src="/assets/svg/arrow-left.svg" alt="left arrow"
                />
            </div>
            <div>
                <a href="{{ $previous->getPath() }}">{{ $previous->title }}</a>
            </div>
        </div>
    @endif
    @if (isset($next))
        <div class="w-full md:w-1/2 flex items-center justify-center md:justify-end">
            <div>
                <a href="{{ $next->getPath() }}">{{ $next->title }}</a>
            </div>
            <div>
                <img
                        class="w-12 h-12"
                        src="/assets/svg/arrow-right.svg" alt="right arrow"
                />
            </div>
        </div>
    @endif
</div>
@if($type == 'top')
    <hr>
@endif
