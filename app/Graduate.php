<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Graduate extends Model
{
    protected $table = 'graduates';
    protected $table = 'undergrad';

    function graduate_degrees(){
        return $this->hasMany('App\GraduateDegree', 'graduate_id', 'id');
    }
}
