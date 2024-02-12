@extends('layouts.app')

@section('head')
  <h1>投稿一覧</h1>

  @foreach($posts as $post)
    <div>
      <h2>{{ $post->title }}</h2>
      <p>{{ $post->content }}</p>
      <p>投稿者: {{ $post->name }}</p>
      <img src="{{ asset('storage/sample/' . $post->image) }}" alt="投稿画像">

    </div>
    
  @endforeach

@endsection