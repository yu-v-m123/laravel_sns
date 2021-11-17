<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

// $article->user;         //-- Userモデルのインスタンスが返る
// $article->user->name;   //-- Userモデルのインスタンスのnameプロパティの値が返る
// $article->user->hoge(); //-- Userモデルのインスタンスのhogeメソッドの戻り値が返る
// $article->user();       //-- BelongsToクラスのインスタンスが返る

class Article extends Model
{
    public function user(): BelongsTo
    {
        return $this->belongsTo('App\User');
    }
}