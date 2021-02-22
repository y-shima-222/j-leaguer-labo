@extends('layouts.app')

@section('content')

    <h1 class="text-center">編集ページ</h1>

    
    {!! Form::model($post, ['route' => ['posts.update', $post->id], 'method' => 'put']) !!}
        <div class="form-group">
            {!! Form::textarea('content', $post->content, ['class' => 'form-control']) !!}
            {!! Form::submit('投稿', ['class' => 'btn-outline-success col-6 offset-3 mt-3 mb-3']) !!}
        </div>
    {!! Form::close() !!}
    
    {{-- 投稿削除ボタンのフォーム --}}
    {!! Form::open(['route' => ['posts.delete', $post->id], 'method' => 'delete']) !!}
        {!! Form::submit('削除', ['class' => 'btn-outline-danger col-6 offset-3 mb-5']) !!}
    {!! Form::close() !!}

@endsection