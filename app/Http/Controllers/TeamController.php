<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class TeamController extends Controller
{
  //this function returns all teams and 
  //members of the team to teams/index
  //sorted by the teams position
  function teams()
  {
    $teams = \App\Team::with('members')->get()->sortBy('position');
      return view('teams.index',['all_teams'=>$teams]);
  } 
}
