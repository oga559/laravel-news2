<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    //テーブル名
    protected $table = "article";
    //カラム
    protected $fillable = ['title', 'text'];
}
