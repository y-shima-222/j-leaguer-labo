<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    //この投稿を所有するユーザー（Userモデルとの関係を定義）
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    
    //この投稿を所有するプレイヤー（Playerモデルとの関係を定義）
    public function player()
    {
        return $this->belongsTo(Player::class);
    }
}
