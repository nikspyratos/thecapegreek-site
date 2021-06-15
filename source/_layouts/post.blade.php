@extends('_layouts.main')

@section('content')
    @include('_partials.body', ['title' => $page->title, 'subtitle' => $page->date])
@endsection
