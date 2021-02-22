@extends('layouts.app')

@section('content')
    
    @include('commons.navtab')
    
    <div>
    @foreach($teams as $team)
        <h2>{!! link_to_route('team.players', $team->name, ['team'=> $team->id], ['class'=>'text-secondary']) !!}</h2>
    @endforeach
    </div>
@endsection