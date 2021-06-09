<div class="w-full p-4 flex justify-between bg-tcg_dark rounded-b-xl text-tcg_white">
    <div class="self-center flex flex-row font-bold text-center text-md divide divide-x-2 divide-tcg_grey">
        @foreach($page->footer->attributions as $attribution)
            <div class="p-2">
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
    <div class="w-0 md:w-auto invisible md:visible self-center mx-4 flex flex-row text-xl font-bold">
        <span class="font-bold self-center">Contact:</span>
        @foreach($page->contacts as $contact)
            <div class="mx-2">
                <a
                        class=""
                        href="{{ $contact->url }}"
                >
                    <img
                            class="w-8 h-8"
                            src="{{ getSvgIcon($loop->even ? 'tcg_light_blue' : 'tcg_green', $contact->icon) }}" alt="{{ $contact->alt }}"
                    />
                </a>
            </div>
        @endforeach
    </div>
</div>


