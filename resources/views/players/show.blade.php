@extends('layouts.app')

@section('content')
    <div>
        <h1>{{$player->name}}</h1>
    </div>
    
    <hr>

    @if ($myPost) 
        <div class="card mb-3">
            <div class="card-header">{{$myPost->user->name}}</div>
            <div class="card-body">{!! nl2br(e($myPost->content)) !!}</div>
        </div>    
        <div class="text-center">
            {!! link_to_route('posts.edit', '編集する', ['mypost' => $myPost->id], ['class' => 'btn btn-secondary']) !!}
        </div>
        
        <hr>
        
        <div>           
            @foreach($posts as $post)
                <div class="card">
                    <div class="card-header">{{ $post->user->name }}</div>
                    <div class="card-body">{!! nl2br(e($post->content)) !!}</div>
                </div>
            @endforeach
        </div>
        {{ $posts->links() }} 
        
    @else　
        <div class="text-center mb-5">
            @if(Auth::check())
                {!! link_to_route('posts.create', '投稿する', ['player'=>$player->id], ['class' => 'btn btn-outline-success']) !!}
            @else 
                {!! link_to_route('login', '投稿する', [], ['class' => 'btn btn-outline-success']) !!}
            @endif
        </div>
        <div>           
            @foreach($posts as $post)
                <div class="card">
                    <div class="card-header">{{ $post->user->name }}</div>
                    <div class="card-body">{!! nl2br(e($post->content)) !!}</div>
                </div>
            @endforeach
        </div> 
        {{ $posts->links() }} 
    @endif
@endsection


