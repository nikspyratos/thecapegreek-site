<div class="flex flex-wrap flex-row justify-center my-8">
@foreach($items as $item)
    @include('_partials.item-card', ['item' => $item, 'cardSize' => $cardSize ?? 'w-1/3', 'borderColour' => $borderColour ?? 'tcg_blue'])
@endforeach
</div>
