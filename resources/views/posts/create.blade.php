@extends('layouts.app')

@section('content')
    
    <h1>投稿用フォーム</h1>
    
    {!! Form::open(['route' => ['posts.store', $playerId]]) !!} 
        <div class="form-group">
            {!! Form::textarea('content', null, ['class' => 'form-control',
            'placeholder' => '選手の長所、短所、キャラクター、エピソード、試合を見ての感想（〇〇戦のプレーがすごかったなど）などを入力。']) !!}
            {!! Form::submit('投稿', ['class' => 'btn btn-success btn-block']) !!}
        </div>
　　{!! Form::close() !!}
@endsection