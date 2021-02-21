@extends('layouts.app')

@section('content')
    <div>
        <h3>投稿にはログインが必要です</h3>
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
            
    　　<hr>
    　　
            <p>会員登録がお済みではない方は</p>

            {{-- ユーザ登録ページへのリンク --}}
            {!! link_to_route('signup.get', '新規会員登録', [], ['class'=>'btn btn-info']); !!}
        </div>
    </div>
@endsection