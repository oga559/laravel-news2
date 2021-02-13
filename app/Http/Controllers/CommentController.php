<?php

namespace App\Http\Controllers;
use App\Models\Article;
use Illuminate\Http\Request;
use App\Http\Requests\CommnetRequest;
use  App\Models\Comment;

class CommentController extends Controller
{
//詳細ページに記事とタイトル表示
    public function showdetails($id)
    {
         $detail_data_id = Article::find($id);//Articleモデルからdbのデータ取得
         //もし該当のidが無い(null)場合は、一覧ページにリダイレクトする
         if(is_null($detail_data_id)){
             return redirect(route('article_index')); 
         }
         //取得したデータをビューに渡す
         return view('comment.detail',['detail_data_id'=>$detail_data_id]);
    }
    //コメント一覧
     public function comment_all_show($article_id)
     {
         $comment_data_id =  Comment::findOrFail($article_id);
         if(is_null($comment_data_id)){
             return redirect(route('article_index')); 
         }
          //取得したデータをビューに渡す
          return view('comment.detail',['comment_data_id'=>$comment_data_id]);
     }
//dbにコメント投稿作成中
    // public function commentstore(CommnetRequest $request)
    // {
    //     //postされたデータをdbに送信
    //     $detail_data_id = $request -> all();
    //     Comment::create($detail_data_id);
    //     // $detail_data_id = Article::find($id);
    //     // return view('comment.detail',['detail_data_id'=>$detail_data_id]);
    //     return redirect()->route('details',['detail_data_id'=>$detail_data_id]);
    // }
}