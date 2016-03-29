<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Parameter;
class Team extends Model
{
  
    protected $appends = array('score');
  
  
    // DEFINE RELATIONSHIPS --------------------------------------------------
    // each TEAM has many MEMBERS
    public function members() {
        return $this->hasMany('App\Member'); // this matches the Eloquent model
    }
  
    // Functions--------------------------------------------------
    // Calculate average postion by summing wk01,wk02 etc...
    //
    public function getScoreAttribute()
    {
      $week_no=5;
      $team_id=$this->attributes['id'];
      $userdata=\App\Team::with('members')->where('id',$team_id)->first();
      $sum=$userdata['members']->avg('overall_position');
      return $sum/$week_no;
    }
  

}


