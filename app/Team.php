<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    // DEFINE RELATIONSHIPS --------------------------------------------------
    // each TEAM has many MEMBERS
    public function members() {
        return $this->hasMany('App\Member'); // this matches the Eloquent model
    }
}
