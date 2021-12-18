<header class="top-0 w-full p-4 flex flex-col justify-between bg-tcg_darker_purple border-tcg_pink border-b-2 rounded-t-xl text-tcg_white">
    <a class="w-full mb-4 self-center justify-center flex flex-col sm:flex-row space-x-4" href="/">
        <img class="w-48 sm:w-1/4 mb-2 sm:mb-0 rounded-full self-center" src="{{ $page->navigation->logo }}">
        <div class="flex flex-col self-center font-bold text-xl sm:text-2xl">
            <span class="text-5xl sm:text-7xl clip-text bg-tcg-gradient-primary">{{ $page->navigation->title }}</span>
            <span class="text-3xl sm:text-5xl clip-text bg-tcg-gradient-secondary">{{ $page->navigation->subtitle }}</span>
        </div>
    </a>
    <nav class="w-full self-center justify-center flex flex-wrap flex-col text-lg lg:text-xl font-bold">
        @if (count($page->navigation->links) > 1)
        <ul class="list-none my-2 self-center ">
            @foreach($page->navigation->links as $navItem)
                <li class="inline-block mr-1 pl-2">
                    <a
                        class="text-2xl {{ $page->selected($navItem->url) ? 'text-tcg_pink border-b-2 border-tcg_pink' : '' }}"
                        href="{{ $navItem->url }}"
                    >
                        {{ $navItem->title }}
                    </a>
                </li>
            @endforeach
        </ul>
        @endif
        <address class="my-2 flex flex-wrap flex-row self-center">
            @foreach($page->contacts as $contact)
                <a class="inline-block mx-1 pl-2 text-xl" href="{{ $contact->url }}" target="_blank">
                    <img
                        class="inline w-10 h-10"
                        src="/assets/svg/{{ $contact->icon }}.svg"
                        alt="{{ $contact->title }}"
                    />
                    {{ $contact->title }}
                </a>
            @endforeach
        </address>
        <hr class="my-4">
        @include('_components.revue-signup')
    </nav>
</header>
