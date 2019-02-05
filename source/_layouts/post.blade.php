@extends('_layouts.master')

@section('body')
    <h1>{{ $page->title }}</h1>
    <h2>by {{ $page->author }}</h2>

    @yield('postContent')
@endsection
