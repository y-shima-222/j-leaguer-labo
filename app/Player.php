<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Player extends Model
{
    //このプレイヤーが所有する投稿（Postモデルとの関係を定義）
    public function playerposts()
    {
        return $this->hasMany(Post::class);
    }
}
