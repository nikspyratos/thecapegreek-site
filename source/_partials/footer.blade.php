<footer class=" w-full p-4 flex flex-wrap lg:flex-row justify-center bg-tcg_darker_purple border-tcg_pink border-t-2 rounded-b-xl text-tcg_white">
    <ul class="flex flex-col md:flex-row list-none self-center items-center md:divide md:divide-x-2 md:divide-tcg_grey">
        @foreach($page->footer->siteLinks as $siteLink)
            <li class="inline-block mr-1 pl-2">
                {{ $siteLink->prefix }}
                <a
                    href="{{ $siteLink->url }}"
                >
                    {{ $siteLink->text }}
                </a>
            </li>
        @endforeach
    </ul>
</footer>


