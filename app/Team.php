<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
  
    protected $appends = array('position');
  
  
    // DEFINE RELATIONSHIPS --------------------------------------------------
    // each TEAM has many MEMBERS
    public function members() {
        return $this->hasMany('App\Member'); // this matches the Eloquent model
    }
  
    // Functions--------------------------------------------------
    // Calculate average postion by summing wk01,wk02 etc...
    //
    public function getPositionAttribute()
    {
      $team_id=$this->attributes['id'];
      $userdata=\App\Team::with('members')->where('id',$team_id)->first();
      $sum=$userdata['members']->avg('myposition');
      return $sum;
    }
  
  
  
}


