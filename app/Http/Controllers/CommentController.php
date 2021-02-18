<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;
use App\Http\Requests\CommnetRequest;
use  App\Models\Comment;

class CommentController extends Controller
{
//詳細ページに「記事とタイトル」、「コメント」表示（$articleは、Articleテーブルのid）
    public function showdetails($article)
    {
        $detail_data = Article::find($article);//Articleモデルからdbのデータ取得
         //取得したデータをビューに渡す
        return view('comment.detail_list',compact('detail_data'));
    }
//dbにコメント投稿
    public function commentstore(CommnetRequest $request)
    {
        //postされたデータをdbに送信
        $detail_data_post = $request -> all();
        Comment::create($detail_data_post);
        return back();
    }
    //コメント削除機能($idは、Commentテーブルのid)
    public function commentdelete($id)
    {
        Comment::destroy($id);
        return back();
    }
}