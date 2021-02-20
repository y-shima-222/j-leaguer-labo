<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Player;

class PlayersController extends Controller
{
    public function index()
    {
        //すべてのプレイヤーを取得
        $players = Player::all();
        
        //選手一覧で表示
        return view('players.index',['players' => $players]);
    }
    
    public function show($id)
    {
        //idで指定したプレイヤーを検索して取得
        $player = Player::findOrFail($id);
        
        //idで指定したプレイヤーが所有する投稿（ログインユーザーの投稿を除くには？）
        $posts = $player->playerPosts()->paginate(20);
        
        //ログインユーザーのこのページの選手に対しての投稿をとる
        $myPost =  $player->playerPosts()->where('user_id',\Auth::id())->first();
        
        //選手ページで　名前とURLと投稿　を表示
        return view('players.show',[
            'player' => $player,
            'posts' => $posts,
            'myPost' => $myPost
        ]);
    }
}
