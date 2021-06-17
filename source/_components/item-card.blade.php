@php
    $sizeClasses = "w-full $cardSize";
    if (isset($grid) && $grid) {
        $sizeClasses = '';
    }
    $borderClasses = "p-4 shadow-lg rounded-xl border-2 $borderColour";
    if ($transparent) {
        $borderClasses = '';
    }
@endphp
<div class="flex flex-col {{ $sizeClasses }} mx-4 my-4 {{ $borderClasses }}">
    <h3>
        @if(!empty($item['url']))
            <a href="{{ $item['url'] }}">{{ $item['title'] }}</a>
        @else
            {{ $item['title'] }}
        @endif
    </h3>
    @if(!empty($item['subtitle']))
        <span class="{{ !empty($item['url']) ? 'pt-2' : '' }} pb-1 text-sm italic">{{ $item['subtitle'] }}</span>
    @endif
    @if(!empty($item['description']))
        <span class="">{!! $item['description'] !!}</span>
    @endif
</div>
