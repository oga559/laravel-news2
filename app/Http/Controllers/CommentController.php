<?php

namespace App\Http\Controllers;
use App\Models\Article;
use Illuminate\Http\Request;

class CommentController extends Controller
{
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
}
