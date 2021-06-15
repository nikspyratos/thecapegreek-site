<footer class="w-full p-4 flex flex-wrap lg:flex-row justify-between bg-tcg_dark border-tcg_pink border-t-2 rounded-b-xl text-tcg_white">
    <div class="w-full lg:w-auto self-center justify-center flex flex-row font-bold text-center text-sm sm:text-lg divide divide-x-2 divide-tcg_grey">
        @foreach($page->footer->attributions as $attribution)
            <div class="{{ $loop->first ? 'pr-2' : ($loop->last ? 'pl-2' : 'px-2' )}}">
                {{ $attribution->text }}
                <a
                    class="{{ $loop->even ? 'text-tcg_light_blue' : 'text-tcg_green' }}"
                    href="{{ $attribution->url }}"
                >
                    {{ $attribution->author }}
                </a>
            </div>
        @endforeach
    </div>
    <div class="w-full lg:w-auto mt-3 lg:mt-0 self-center justify-center flex flex-wrap flex-row text-md sm:text-lg font-bold">
        <span class="mr-1 font-bold self-center">Contact:</span>
        @foreach($page->contacts as $contact)
            <div class="mx-1">
                <a href="{{ $contact->url }}">
                    <img
                            class="w-8 h-8"
                            src="{{ getSvgIcon($loop->even ? 'tcg_light_blue' : 'tcg_green', $contact->icon) }}" alt="{{ $contact->alt }}"
                    />
                </a>
            </div>
            @if (!$loop->last)
                <div class="self-center">
                    &#183;
                </div>
            @endif
        @endforeach
    </div>
</footer>


