---
title: Blog
---
@extends('_layouts.master')

@section('body')
  <div class="container">
    @foreach ($posts as $post)
      <h3><a href="{{ $post->getUrl() }}">{{ $post->title }}</a></h3>
      <p>{{ $post->author }}</p>
      <time>{{ date('F j, Y', $post->date) }}</time>
    @endforeach
  </div>
@endsection
