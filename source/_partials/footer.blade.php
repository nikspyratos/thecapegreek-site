<footer class=" w-full p-4 flex flex-wrap lg:flex-row justify-between bg-tcg_dark border-tcg_pink border-t-2 rounded-b-xl text-tcg_white">
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
</footer>


