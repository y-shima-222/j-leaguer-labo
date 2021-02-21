@extends('layouts.app')

@section('content')

    <h1>編集ページ</h1>

    
    {!! Form::model($post, ['route' => ['posts.update', $post->id], 'method' => 'put']) !!}
        <div class="form-group">
            {!! Form::textarea('content', $post->content, ['class' => 'form-control']) !!}
            {!! Form::submit('投稿', ['class' => 'btn btn-success']) !!}
        </div>
    {!! Form::close() !!}
    
    {{-- 投稿削除ボタンのフォーム --}}
    {!! Form::open(['route' => ['posts.delete', $post->id], 'method' => 'delete']) !!}
        {!! Form::submit('削除', ['class' => 'btn btn-danger']) !!}
    {!! Form::close() !!}

@endsection