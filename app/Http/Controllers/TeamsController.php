<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Team;

class TeamsController extends Controller
{
    //J1リーグのチームを取得して順番に並べる
    public function indexFirst()
    {
        $teams = Team::where('league','1')->orderBy('order','asc')->get();
        
        return view('welcome',['teams' => $teams]);
    }
    
    //J2リーグのチームを取得して順番に並べる
    public function indexSecond()
    {
        $teamsS = Team::where('league','2')->orderBy('order','asc')->get();
        
        return view('welcome2',['teamsS' => $teamsS]);
    }
    
    //
    public function index($id)
    {
        //$idのチームを検索して取得
        $team = Team::findOrFail($id);
        
        //idで取得したチームが所有している選手を取得
        $players = $team->players()->get();
        
        
        //選手一覧で表示
        return view('players.index',[
            'team'    => $team,
            'players' => $players
        ]);
    }
}
