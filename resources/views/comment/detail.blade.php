<!DOCTYPE html>
<html lang="ja">
  <head>
  @yield('head')
  </head>
  <body>
  @yield('title')
    <p>タイトル:{{ $detail_data->title }}</p>
    <p>テキスト:{{ $detail_data->text }}</p>
    <hr>
    @if($errors->has("comment")) 
    {{ $errors->first("comment") }} 
    @endif
    <div class="comment">
      <form action="{{ url('/comments') }}" method="post">
        @csrf
        <input type="hidden" value="{{ $detail_data->id }}" name="article_id">
        <textarea name="comment" cols="30" rows="10"></textarea>
      </div>
      <input type="submit" value="コメントを書く">
    </form>
    @foreach($detail_data->comments as $comment_data) 
    <p>{{ $comment_data->comment }}</p>
    <form action="{{ route('delete',$comment_data -> id) }}" method="post" name="delete">
        @csrf
        @method('DELETE')
      <input type="submit" value="コメントを消す">
    </form>
    @endforeach 
  </body>
</html>