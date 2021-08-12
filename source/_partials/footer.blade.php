<footer class="w-full p-4 flex flex-wrap lg:flex-row justify-between bg-tcg_dark border-tcg_pink border-t-2 rounded-b-xl text-tcg_white">
    <div class="w-full lg:w-auto self-center justify-center flex flex-row font-bold text-center text-sm sm:text-lg">
        <ul class="list-none m-0 divide divide-x-2 divide-tcg_grey">
            @foreach($page->footer->siteLinks as $siteLink)
                <li class="inline-block mr-1 pl-2">
                    {{ $siteLink->prefix }}
                    <a
                        class="{{ $loop->even ? 'text-tcg_light_blue' : 'text-tcg_green' }}"
                        href="{{ $siteLink->url }}"
                    >
                        {{ $siteLink->text }}
                    </a>
                </li>
            @endforeach
        </ul>
    </div>
    <div class="w-full lg:w-auto mt-3 lg:mt-0 self-center justify-center flex flex-wrap flex-row text-md sm:text-lg font-bold">
        <span class="font-bold self-center">Contact:</span>
        <address class="flex flex-wrap flex-row divide divide-x-2 divide-tcg_grey">
        @foreach($page->contacts as $contact)
            <a class="inline-block mx-1 pl-2" href="{{ $contact->url }}">
                <img
                        class="w-8 h-8"
                        src="{{ getSvgIcon($loop->even ? 'tcg_light_blue' : 'tcg_green', $contact->icon) }}" alt="{{ $contact->alt }}"
                />
            </a>
        @endforeach
        </address>
    </div>
</footer>


