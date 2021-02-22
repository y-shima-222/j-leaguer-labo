<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    //チームが所有している選手（playerモデルとの関係を定義）
    public function players()
    {
        return $this->hasMany(Player::class);
    }
}
