<div class="w-full p-4 flex flex-col lg:flex-row justify-between bg-tcg_dark rounded-t-xl text-tcg_white">
    <div class="w-1/3 flex flex-row space-x-4">
        <img class="w-24" src="{{ $page->nav->logo }}">
        <div class="flex flex-col self-center font-bold sm:text-2xl">
            <span class="text-tcg_light_blue">{{ $page->nav->title }}</span>
            <span class="text-tcg_green">{{ $page->nav->subtitle }}</span>
        </div>
    </div>
    <div class="w-full lg:w-auto mt-2 lg:mt-0 self-center flex flex-wrap flex-row lg:text-xl font-bold">
        @foreach($page->nav->links as $navItem)
            <div class="mt-1 mx-2 text-center {{ $page->selected($navItem->name) ? 'border-b-2 border-white' : '' }}">
                <a
                        class=" {{ $loop->even ? 'text-tcg_light_blue' : 'text-tcg_green' }}"
                        href="{{ $navItem->url }}"
                >
                    {{ $navItem->title }}
                </a>
            </div>
            @if (!$loop->last)
                <div class="self-center">
                    &#183;
                </div>
            @endif
        @endforeach
    </div>
</div>
