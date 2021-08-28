<footer class=" w-full p-4 flex flex-wrap lg:flex-row justify-center bg-tcg_dark border-tcg_pink border-t-2 rounded-b-xl text-tcg_white">
    <ul class="list-none self-center items-center divide divide-x-2 divide-tcg_grey">
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
</footer>


