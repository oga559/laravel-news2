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
<textarea name="text" cols="30" rows="10"></textarea>
</div>
<input type="submit" value="コメントを書く">
</form>
</body>
</html>