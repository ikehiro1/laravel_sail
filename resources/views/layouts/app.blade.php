<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Your App')</title>
</head>
<body>
    共通のコメント
    <li><a href="{{ route('top.top') }}">トップ画面へ</a></li>
    <li><a href="{{route("post.create")}}">投稿画面</a></li>
    <li><a href="{{route("posts.index")}}">投稿一覧</a></li>
    @yield('head')
</body>
</html>