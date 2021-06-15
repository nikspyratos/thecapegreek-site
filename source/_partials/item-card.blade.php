@if($transparent)
    <div class="w-full lg:{{ $cardSize }} flex flex-col mx-4 mb-4">
@else
    <div class="w-full lg:{{ $cardSize }} flex flex-col mx-4 mb-4 p-4 shadow-lg rounded-xl border-2 border-{{ $borderColour }}">
@endif
    <h3>
        @if(!empty($item['url']))
            <a href="{{ $item['url'] }}">{{ $item['title'] }}</a>
        @else
            {{ $item->title }}
        @endif
    </h3>
    @if(!empty($item['subtitle']))
        <span class="{{ !empty($item['url']) ? 'pt-2' : '' }} pb-1 text-sm italic">{{ $item['subtitle'] }}</span>
    @endif
    @if(!empty($item['description']))
        <span class="">{{ $item['description'] }}</span>
    @endif
</div>
