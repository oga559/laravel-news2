<!DOCTYPE html>
<html lang="ja">
<head>
    <title>laravelnews詳細</title>
</head>
<body>
<header><a href="http://localhost/sampleproject/public/">laravel-news</a><header>
<p>タイトル:{{$detail_data_id->title}}</p>
<p>テキスト:{{$detail_data_id->text}}</p>
<hr>
<form action="" method="post">
{{csrf_field()}}
<div class="comment">
<input type="hidden" value="{{$detail_data_id->id}}" name="article_id">
<textarea name="comment" cols="30" rows="10"></textarea>
</div>
<input type="submit" value="コメントを書く">
</form>
@foreach($comment_data_id as $comment_data)
<p>コメント:{{$comment_data -> comment}}</p>
@endforeach
</body>
</html>