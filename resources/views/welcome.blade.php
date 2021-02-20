@extends('layouts.app')

@section('content')
    <h1>チーム一覧</h1>
    <p>{!! link_to_route('players.players', 'チーム') !!}</p>
@endsection