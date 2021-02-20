@extends('layouts.app')

@section('content')
    <div>
        <h1>{{$player->name}}</h1>
    　　<p>{{$player->url}}</p>
    </div>
    
    <hr>

    @if ($myPost) //ログインユーザーの投稿があれば
        <div class="card">
            <div class="card-header">{{$myPost->user->name}}</div>
            <div class="card-body">{{$myPost->content}}</div>
        </div>    
        <div>
            {!! link_to_route('', '編集する', ['mypost' => $myPost->id], ['class' => 'btn btn-primary']) !!}
        </div>
        
        <hr>
        
        <div>           
            @foreach($posts as $post)
                <div class="card">
                　  <div class="card-header">{{ $post->user->name }}</div>
                    <div class="card-body">{{$post->content}}</div>
                </div>
            @endforeach
        </div> 
        
    @else　//ログインユーザーの投稿がない or ログインしていない
        <div>
            @if(Auth::check)
                {!! link_to_route('posts.create', '投稿する', ['player'=>$player->id], ['class' => 'btn btn-primary']) !!}
            @else //ログインしていないときに投稿ボタンを押すとログインページに飛ぶ
                {!! link_to_route('login', '投稿する', [], ['class' => 'btn btn-primary']) !!}
            @endif
        </div>
        <div>           
            @foreach($posts as $post)
                <div class="card">
                　  <div class="card-header">{{ $post->user->name }}</div>
                    <div class="card-body">{{$post->content}}</div>
                </div>
            @endforeach
        </div> 
    @endif
@endsection


