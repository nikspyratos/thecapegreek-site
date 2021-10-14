<div class="grid grid-cols-1 md:grid-cols-2">
    @foreach($items as $category => $books)
    <div class="p-4">
        <h2>{{ $category }}</h2>
        <ul>
            @foreach($books as $author => $book)
                <li>
                    <b class="text-tcg_light_blue">{{ $author }}</b> - {{ $book }}
                </li>
            @endforeach
        </ul>
    </div>
    @if(($loop->index + 1) % 2 == 0)
        <hr class="md:col-span-2">
    @endif
    @endforeach
</div>
