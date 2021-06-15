@php
    $cardSize ??= 'w-1/3';
    $bordercolour ??= 'tcg_blue';
    $transparent ??= false;
@endphp
@foreach($collection as $item)
@include(
    '_partials.item-card',
    [
        'item' => [
            'title' => $item->title,
            'subtitle' => $item->date,
            'description' => $item->description,
            'url' => $item->getPath(),
        ],
        'cardSize' => $cardSize,
        'borderColour' => $borderColour,
        'transparent' => $transparent
    ]
)
@endforeach
