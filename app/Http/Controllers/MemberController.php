<?php

namespace App\Http\Controllers; 

use App\Http\Controllers\Controller;

class MemberController extends Controller 
{
  
  function index()
  {
    $members = \App\Member::all();
    return view('members.index',['all_members'=>$members]);
  }
  
  
    function orderbyname()
  {
    $members = \App\Member::orderBy('Wk01', 'asc')->get();
    //return view('members.index',['all_members'=>$members]);
         //for testing purposes
         echo '<pre>';
         print_r($members);
         echo '<pre>';
  }
  
  //this function returns all teams and 
  //members of the team to teams/index
  //sorted by the teams position
  function teams()
  {
    $teams = \App\Team::with('members')->get()->sortBy('position');
      return view('teams.index',['all_teams'=>$teams]);
  } 
 
  // this is testing software
   function testsum()
  { 
      $id=1;
      $userdata=\App\Team::with('members')->where('id',$id)->first();
      $sum=$userdata['members']->avg('wk01');
     echo $userdata;
   }
}