<?php

namespace App\Http\Controllers; 

use App\Http\Controllers\Controller;

class MemberController extends Controller 
{
  
  function index()
  {
    $members = \App\Member::all();
    return view('members.index',['all_members'=>$members]);
         //for testing purposes
         //echo '<pre>';
         //print_r($members);
         //echo '<pre>';
  }
  
  
    function orderbyname()
  {
    $members = \App\Member::orderBy('Wk01', 'asc')
               ->take(10)
               ->get();
    return view('members.index',['all_members'=>$members]);
         //for testing purposes
         //echo '<pre>';
         //print_r($members);
         //echo '<pre>';
  }
  
  //this function returns all teams and 
  //members of the team to teams/index
  //
  function teams()
  {
    $teams = \App\Team::with('members')->get();
      return view('teams.index',['all_teams'=>$teams]);
  } 
  
}