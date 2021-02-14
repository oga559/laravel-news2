<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    //テーブル名
    protected $table = "articles";
    //カラム
    protected $fillable = ['title', 'text'];
}
