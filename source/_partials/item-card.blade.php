<div class="w-full sm:{{ $cardSize }} flex flex-col mx-4 mb-4 p-4 shadow-md rounded-xl border-2 border-{{ $borderColour }}">
    <h3>
        @if(!empty($item['link']))
            <a href="{{ $item->link }}">{{ $item->title }}</a>
        @else
            {{ $item->title }}
        @endif
    </h3>
    @if(!empty($item['subtitle']))
        <span class="{{ !empty($item['link']) ? 'pt-2' : '' }} text-sm italic">{{ $item->subtitle }}</span>
    @endif
    @if(!empty($item['description']))
        <span class="">{{ $item->description }}</span>
    @endif
</div>
