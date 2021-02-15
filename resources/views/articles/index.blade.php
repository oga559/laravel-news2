<!DOCTYPE html>
<html lang="ja">
  <head>
    <title>laravelnews一覧ページ</title>
    <link rel="stylesheet" href="{{ asset('/css/keijibann.css') }}">
  </head>
  <body>
    <h2>
      <a href="{{route(('article_index'))}}" class="title_news">laravel-news</a>
    </h2>
    <div class="error_title">
        @if($errors->has("title")) 
        {{$errors->first("title")}} 
        @endif 
    </div>
    <div class="error_text">
        @if($errors->has("text"))
        {{$errors->first("text")}} 
        @endif 
    </div>
    <form action="{{route('article_store')}}" method="post">
        {{csrf_field()}} 
      <div class="title">
        <label for="title">タイトル:</label>
        <input type="text" name="title">
      </div>
      <div class="text">
        <label for="text">記事:</label>
        <textarea name="text" cols="30" rows="10"></textarea>
      </div>
      <input type="submit" value="送信" class="submit">
    </form>
      <hr>
      @foreach($article_db_data as $article_data) 
      <p>タイトル:{{$article_data->title}}</p>
      <!-- Str::limit関数で出力文字数制限 -->
      <p>テキスト:{{Str::limit($article_data->text,120,'...')}}</p>
      <a href="article/{{$article_data->id}}">詳細ページ</a>
      <hr>
      @endforeach 
  </body>
</html>