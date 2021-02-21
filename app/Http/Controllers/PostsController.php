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
            'content' => 'required|max:15000',
        ]);
        
        //新規投稿の作成
        $post = new Post;
        $post->user_id = \Auth::id();
        $post->player_id = $playerId;
        $post->content = $request->content;
        $post->save();
        
        //選手ページに戻る
        return redirect()->route('players.player', ['player' => $playerId]);
    }
    
    //投稿の編集
    public function edit($id)
    {
        //$idで投稿を検索して取得
        $post = Post::findOrFail($id);
        
         //編集ビューで表示
        return view('posts.edit', [
            'post' => $post,
        ]);
    }
    
    //編集の処理
    public function update(Request $request,$id)
    {
        // バリデーション
        $request->validate([
            'content' => 'required|max:15000',
        ]);
        
        //$idの値で投稿を検索して取得
        $post = Post::findOrFail($id);
        
        //投稿を更新
        $post->content = $request->content;
        $post->save();
        
        //player_idを取り出す
        $playerId = $post->player_id;
        
        //前のURLに戻る
        return redirect()->route('players.player', ['player' => $playerId]);
    }
    
    //削除
    public function destroy($id)
    {
        //$idの値で投稿を検索して取得
        $post = Post::findOrFail($id);
        
        // メッセージを削除
        $post->delete();

        //player_idを取り出す
        $playerId = $post->player_id;
        
        //前のURLに戻る
        return redirect()->route('players.player', ['player' => $playerId]);
    }
}
