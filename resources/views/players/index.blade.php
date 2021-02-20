@extends('layouts.app')

@section('content')
    <h1>選手一覧</h1>
    @foreach ($players as $player)
        <p>{!! link_to_route('players.player', $player->name, ['player' => $player->id]) !!}</p>
    @endforeach
@endsection