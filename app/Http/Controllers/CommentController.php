<?php

namespace App\Http\Controllers;
use App\Models\Article;
use Illuminate\Http\Request;
use App\Http\Requests\CommnetRequest;
use  App\Models\Comment;

class CommentController extends Controller
{
//詳細ページに「記事とタイトル」、「コメント」表示
    public function showdetails($id)
    {
         $detail_data_id = Article::find($id);//Articleモデルからdbのデータ取得
         $comment_data_id = Comment::where('article_id',$id)->get();
         //取得したデータをビューに渡す
         return view('comment.detail',compact('detail_data_id','comment_data_id'));
    }
//dbにコメント投稿作成中
    public function commentstore(CommnetRequest $request,$id)
    {
        //postされたデータをdbに送信
        $detail_data_id = $request -> all();
        Comment::create($detail_data_id);
        return redirect(('/article/'.$id));
    }
}