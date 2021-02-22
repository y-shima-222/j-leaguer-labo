<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Player extends Model
{
    //このプレイヤーに対する投稿（Postモデルとの関係を定義）
    public function playerposts()
    {
        return $this->hasMany(Post::class);
    }
    
    //このプレイヤーが所属しているチーム（Teamモデルとの関係を定義）
    public function team()
    {
        return $this->belongsTo(Team::class);
    }
}
