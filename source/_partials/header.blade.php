<header class="top-0 w-full p-4 flex flex-col sm:flex-row justify-between bg-tcg_dark border-tcg_pink border-b-2 rounded-t-xl text-tcg_white">
    <div class="w-full mb-2 lg:mb-0 self-center justify-center sm:justify-start flex flex-row space-x-4">
        <img class="w-24" src="{{ $page->navigation->logo }}">
        <div class="flex flex-col self-center font-bold text-xl sm:text-2xl">
            <span class="text-tcg_light_blue">{{ $page->navigation->title }}</span>
            <span class="text-tcg_green">{{ $page->navigation->subtitle }}</span>
        </div>
    </div>
    <nav class="w-full mt-2 lg:mt-0 self-center justify-center sm:justify-end flex flex-wrap flex-col text-lg lg:text-xl font-bold">
        <ul class="list-none my-2 self-center sm:self-end divide divide-x-2 divide-tcg_grey">
            @foreach($page->navigation->links as $navItem)
                <li class="inline-block mr-1 pl-2">
                    <a
                            class="{{ $loop->even ? 'text-tcg_light_blue' : 'text-tcg_green' }} {{ $page->selected($navItem->url) ? 'border-b-2 border-tcg_white' : '' }}"
                            href="{{ $navItem->url }}"
                    >
                        {{ $navItem->title }}
                    </a>
                </li>
            @endforeach
        </ul>
        <address class="my-2 flex flex-wrap flex-row self-center sm:self-end divide divide-x-2 divide-tcg_grey">
            @foreach($page->contacts as $contact)
                <a class="inline-block mx-1 pl-2" href="{{ $contact->url }}">
                    <img
                            class="w-8 h-8"
                            src="{{ getSvgIcon($loop->even ? 'tcg_light_blue' : 'tcg_green', $contact->icon) }}" alt="{{ $contact->alt }}"
                    />
                </a>
            @endforeach
        </address>
    </nav>
</header>
