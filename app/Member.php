<?php

namespace app;

use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
  protected $fillable = array('name', 'wk01', 'wk02', 'wk03', 'wk04', 'wk05');
  
    // DEFINE RELATIONSHIPS --------------------------------------------------
    // each member is a member of a TEAM
    public function team() {
        return $this->belongsTo('app\Team'); // this matches the Eloquent model
    }

  function getsum()
  { 
    return $this->wk01 + $this->wk02 + $this->wk03 + $this->wk04 + $this->wk05 ;
    
  }
  
  
}
  
  