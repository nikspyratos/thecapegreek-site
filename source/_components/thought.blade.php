@php
    $cardSize ??= 'lg:w-1/3';
    $borderColour ??= 'border-tcg_blue';
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
        'borderColour' => $borderColour,
        'transparent' => true,
        'grid' => false
    ]
)
