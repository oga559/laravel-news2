<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
//記事一覧
Route::get('/', "ArticleController@index")->name('article_index');
//投稿機能
Route::post('/', "ArticleController@create")->name('article_create');
//詳細ページコメント表示
Route::get('article/{id}', "CommentController@showdetails")->name('details');
//コメント投稿作成中
Route::post('article/{id}', "CommentController@commentstore")->name('commentstore');
//コメント削除
Route::delete('article/{id}', "CommentController@commentdelete")->name('delete');
