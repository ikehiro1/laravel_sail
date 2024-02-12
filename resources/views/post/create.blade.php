@extends("layouts.app")

@section("head")
<form action="{{ route('post.store') }}" method="post" enctype="multipart/form-data">  @csrf
  <h1>投稿画面</h1>

  <div>
    名前:
    <input name="name" value="名前の入力欄"/>
  </div>
  <div>
    タイトル:
    <input name="title" placeholder="タイトルの入力欄"/>
  </div>
  <div>
     <textarea name="content" placeholder="内容の入力"></textarea>
  </div>
  <div>
    <input type="file" name="image"><br>
    <button type="submit">アップロード</button>
  </div>
</form>  
@endsection