<!DOCTYPE html>
<html lang="ja">
<head>
    <title>laravelnews一覧</title>
</head>
<body>
<header><a href="http://localhost/sampleproject/public/">laravel-news</a><header>
<form action="" method="post">
<div class="title">
<input type="text" name="title">
{{csrf_field()}}
</div>
<div class="text">
<textarea name="text" cols="30" rows="10"></textarea>
</div>
<input type="submit" value="送信">
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
<hr>
@foreach($article_db_data as $article_data)
<p>タイトル:{{$article_data->title}}</p>
<!-- Str::limit関数で出力文字数制限 -->
<p>テキスト:{{Str::limit($article_data->text,120,'...')}}</p>
<a href="article/{{$article_data->id}}">詳細ページ</a>
<hr>
@endforeach
</form>
</body>
</html>