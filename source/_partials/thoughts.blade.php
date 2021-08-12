@foreach($thoughts as $thought)
<article class="flex flex-col mx-4 mb-4">
    <h3>
        @if(isset($thought['url']))
            <a href="{{ $thought->url }}">{{ $thought->title }}</a>
        @else
            {{ $thought->title }}
        @endif
    </h3>
    <section>
        <span class="text-sm italic">{{ $thought->date }}</span>
        {!! $thought->getContent() !!}
    </section>
</article>
<hr>
@endforeach
