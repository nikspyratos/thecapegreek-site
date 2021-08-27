@php
    $cardSize ??= 'lg:w-1/3';
    $borderColour ??= 'border-tcg_purple';
    $transparent ??= false;
@endphp
{{--<div class="grid grid-cols-4 my-8 {{ isset($centered) && $centered ? 'justify-items-start' : '' }}">--}}
<li class="list-none flex flex-wrap flex-row my-8 {{ isset($centered) && $centered ? 'justify-center' : '' }}">
@foreach($collection as $item)
    @include(
        '_components.item-card',
        [
            'item' => [
                'title' => $item->title,
                'subtitle' => $item->date,
                'description' => $item->description,
                'url' => $item->getPath(),
            ],
            'cardSize' => $cardSize,
            'borderColour' => $borderColour,
            'transparent' => $transparent,
        ]
    )
    @endforeach
{{--</div>--}}
</li>
