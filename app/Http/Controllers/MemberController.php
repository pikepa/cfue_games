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

    $members = \App\Member::where('team', 'Team 02')
               ->orderBy('wk01', 'asc')
               ->take(10)
               ->get();
    return view('members.index',['all_members'=>$members]);
         //for testing purposes
         //echo '<pre>';
         //print_r($members);
         //echo '<pre>';
  }
}