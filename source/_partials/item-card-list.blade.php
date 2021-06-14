<div class="flex flex-wrap flex-row my-8 {{ isset($centered) && $centered ? 'justify-center' : '' }}">
@foreach($items as $item)
    @include('_partials.item-card', ['item' => $item, 'cardSize' => $cardSize ?? 'w-1/3', 'borderColour' => $borderColour ?? 'tcg_blue', 'transparent' => $transparent ?? false])
@endforeach
</div>
