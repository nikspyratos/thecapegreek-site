<header class="w-full p-4 flex flex-col lg:flex-row justify-between bg-tcg_dark border-tcg_pink border-b-2 rounded-t-xl text-tcg_white">
    <div class="w-1/3 flex flex-row items-start space-x-4">
        <img class="w-24" src="{{ $page->navigation->logo }}">
        <div class="flex flex-col self-center font-bold text-xl sm:text-2xl">
            <span class="text-tcg_light_blue">{{ $page->navigation->title }}</span>
            <span class="text-tcg_green">{{ $page->navigation->subtitle }}</span>
        </div>
    </div>
    <nav class="w-full lg:w-auto mt-3 lg:mt-0 self-center flex flex-wrap flex-row text-lg lg:text-xl font-bold divide divide-x-2 divide-tcg_grey">
        @foreach($page->navigation->links as $navItem)
            <div class="mt-1 mx-2 pl-3 text-center">
                <a
                        class="{{ $loop->even ? 'text-tcg_light_blue' : 'text-tcg_green' }} {{ $page->selected($navItem->url) ? 'border-b-2 border-tcg_white' : '' }}"
                        href="{{ $navItem->url }}"
                >
                    {{ $navItem->title }}
                </a>
            </div>
        @endforeach
    </nav>
</header>
