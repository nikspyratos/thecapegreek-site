@php
    $cardSize ??= 'w-1/3';
    $borderColour ??= 'tcg_blue';
    $transparent ??= false;
@endphp

<article class="flex flex-wrap flex-row my-8 {{ isset($centered) && $centered ? 'justify-center' : '' }}">
@foreach($items as $item)
    @include('_components.item-card', ['item' => $item, 'cardSize' => $cardSize, 'borderColour' => $borderColour, 'transparent' => $transparent])
@endforeach
</article>
