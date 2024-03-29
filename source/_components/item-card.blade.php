@php
    $sizeClasses = "w-full $cardSize";
    $borderClasses = "p-4 shadow-lg rounded-xl border-2 $borderColour";
    if ($transparent) {
        $borderClasses = '';
    }
@endphp
<article class="flex flex-col {{ $sizeClasses }} mx-4 my-4 {{ $borderClasses }}">
    <span class="text-xl">
        @if(!empty($item['url']))
            <a href="{{ $item['url'] }}" @if(isExternalLink($page, $item['url']))target="_blank"@endif>{{ $item['title'] }}</a>
        @else
            {{ $item['title'] }}
        @endif
    </span>
    <section>
        @if(!empty($item['subtitle']))
            <span class="{{ !empty($item['url']) ? 'pt-2' : '' }} pb-1 text-sm italic">{{ $item['subtitle'] }}</span>
        @endif
        @if(!empty($item['description']))
            <p class="m-0">{{ $item['description'] }}</p>
        @endif
    </section>
</article>
