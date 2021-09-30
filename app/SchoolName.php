<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SchoolName extends Model
{
    function degree(){
        return $this->hasMany('App\GraduateDegree', 'school_name_id', 'id');
    }
}
