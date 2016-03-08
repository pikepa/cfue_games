<?php

namespace app;

use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
  //This claculates the sum of all postions
  //over the five seeks
 protected $appends = array('myposition');

  
  
  protected $fillable = array('name', 'wk01', 'wk02', 'wk03', 'wk04', 'wk05');
  
    // DEFINE RELATIONSHIPS --------------------------------------------------
    // each member is a member of a TEAM
    public function team() {
        return $this->belongsTo('app\Team'); // this matches the Eloquent model
    }

    // Functions--------------------------------------------------
    // Calculate average postion by summing wk01,wk02 etc...
    //
    public function getMypositionAttribute()
    {
      return $this->wk01 + $this->wk02 + $this->wk03 + $this->wk04 + $this->wk05 ;
    
    }

}
  
  