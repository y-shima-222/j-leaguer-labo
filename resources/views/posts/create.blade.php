@extends('layouts.app')

@section('content')
    {!! Form::open(['route' => ['posts.store', $playerId]]) !!} 
        <div class="form-group">
            {!! Form::textarea('投稿内容', null, ['class' => 'form-control']) !!}
            {!! Form::submit('投稿', ['class' => 'btn btn-primary btn-block']) !!}
        </div>
　　{!! Form::close() !!}
@endsection