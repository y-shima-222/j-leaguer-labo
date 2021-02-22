@extends('layouts.app')

@section('content')
    <div class="text-center mb-5">
        <h4>投稿にはログインが必要です</h4>
    </div>
    <div class="text-center">
        <h1>ログイン</h1>
    </div>

    <div class="row">
        <div class="col-sm-6 offset-sm-3">

            {!! Form::open(['route' => 'login.post']) !!}
                <div class="form-group">
                    {!! Form::label('email', 'メールアドレス') !!}
                    {!! Form::email('email', old('email'), ['class' => 'form-control']) !!}
                </div>

                <div class="form-group">
                    {!! Form::label('password', 'パスワード') !!}
                    {!! Form::password('password', ['class' => 'form-control']) !!}
                </div>

                {!! Form::submit('ログイン', ['class' => 'btn btn-primary btn-block']) !!}
            {!! Form::close() !!}
        </div>
    </div>

    <hr>
    <div class='text-center mb-5'>
        <p>ログインがお済みではない方は</p>    
        {!! link_to_route('signup.get', '新規会員登録', [], ['class'=>'btn btn-info']); !!}    
    </div>　　
                
@endsection