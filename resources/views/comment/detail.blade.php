<!DOCTYPE html>
<html lang="ja">
  <head>
    <title>laravelnews詳細ページ</title>
    <link rel="stylesheet" href="{{ asset('/css/keijibann.css') }}">
  </head>
  <body>
    <h2>
      <a href="{{route(('article_index'))}}" class="title_news">laravel-news</a>
    </h2>
    <p>タイトル:{{$detail_data_id->title}}</p>
    <p>テキスト:{{$detail_data_id->text}}</p>
    <hr>
    @if($errors->has("comment")) 
    {{$errors->first("comment")}} 
    @endif 
    <div class="comment">
      <form action="{{route('details',$detail_data_id->id)}}" method="post">
          {{csrf_field()}} 
        <input type="hidden" value="{{$detail_data_id->id}}" name="article_id">
        <textarea name="comment" cols="30" rows="10"></textarea>
      </div>
      <input type="submit" value="コメントを書く">
    </form>
    @foreach($comment_data_id as $comment_data) 
    <p>{{$comment_data ->comment}}</p>
    <form action="{{route('delete',$comment_data -> id)}}" method="post" name="delete">
        {{csrf_field()}} 
        {{ method_field('DELETE')}} 
      <input type="submit" value="コメントを消す">
    </form>
    @endforeach 
  </body>
</html>