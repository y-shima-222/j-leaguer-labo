@extends('layouts.app')

@section('content')
    
    @include('commons.navtab')
    
    @foreach($teamsS as $teamS)
        <h2>{!! link_to_route('team.players', $teamS->name, ['team'=> $teamS->id], ['class'=>'text-secondary']) !!}</h2>
    @endforeach
@endsection