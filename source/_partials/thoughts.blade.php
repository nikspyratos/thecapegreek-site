@foreach($thoughts as $thought)
<div class="flex flex-col mx-4 mb-4 {{ $borderClasses }}">
    <h3>
        @if(isset($thought['url']))
            <a href="{{ $thought->url }}">{{ $thought->title }}</a>
        @else
            {{ $thought->title }}
        @endif
    </h3>
    <span class="pb-1 text-sm italic">{{ $thought->date }}</span>
    {!! $thought->getContent() !!}
    <hr>
</div>
@endforeach
