@extends('layouts.app')

@section('content')
  <h1>投稿一覧</h1>

  @foreach($posts as $post)
    <div>
      <h2>{{ $post->title }}</h2>
      <p>{{ $post->content }}</p>
      <p>投稿者: {{ $post->name }}</p>
    </div>
  @endforeach

  <a href="{{ route('top.top') }}">トップ画面へ</a>
  <a href="{{route("post.create")}}">投稿画面</a>
@endsection