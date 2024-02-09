@extends("layouts.app")

@section("content")
<form action="{{ route("post.store")}}" method="POST">
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
  <button>送信</button>
</form>  
@endsection