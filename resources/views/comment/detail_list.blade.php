@extends('comment.detail')
@section('head')
<meta charset="UTF-8">
<title>laravelnews詳細ページ</title>
<link rel="stylesheet" href="{{ asset('/css/keijibann.css?201610261200') }}">
@endsection
@section('title')
<h2>
  <a href="{{ route(('article_index')) }}" class="title_news">laravel-news</a>
</h2>
@endsection