@php
    $cardSize ??= 'w-1/3';
    $borderColour ??= 'tcg_blue';
    $transparent ??= false;
@endphp
@include(
    '_components.item-card',
    [
        'item' => [
            'title' => $thought->title,
            'subtitle' => $thought->date,
            'description' => $thought->getContent()
        ],
        'cardSize' => 'w-full',
        'borderColour' => $borderColour,
        'transparent' => true,
        'grid' => false
    ]
)
