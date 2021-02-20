<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Post;

class PostsController extends Controller
{
    //新規投稿の作成
    public function create($playerId){
        $post = new Post;
        
        return view('posts.create', [
            'playerId' => $playerId,
            'post' => $post
        ]);
    }
    
    //新規投稿の処理
    public function store(Request $request,$playerId)
    {   
        // バリデーション
        $request->validate([
            'content' => 'required|max:50000',
        ]);
        
        //新規投稿の作成
        $post = new Post;
        $post->user_id = \Auth::id();
        $post->player_id = $playerId;
        $post->content = $request->content;
        $post->save();
        
        //前のURLに戻る
        return back();
    }
}
