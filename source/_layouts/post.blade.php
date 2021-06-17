@extends('_layouts.main')

@section('content')
    @include('_partials.body', ['title' => $page->title, 'subtitle' => $page->date, 'previous' => $page->getPrevious(), 'next' => $page->getNext()])
@endsection
