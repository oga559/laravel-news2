<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;
use  App\Http\Requests\ArticleRequest;

class ArticleController extends Controller
{
//記事一覧
    public function index()
    {
        $article_db_data = Article::orderBy('id','desc')->get();//新着順に、Articleモデルからdbのデータを取得
        //取得したデータをビューに渡す
        return view('articles.article_list',compact('article_db_data'));
    }
//記事投稿
    //本来Requestのところを作っておいたArticleRequestとして、ArticleRequestクラスのバリデーションを行える
    public function create(ArticleRequest $request)
    {
        //投稿したデータを受け取る
        $article_post = $request -> all();
        //postリクエストをdbに送信
        Article::create($article_post);
        return back();
    }
}
