<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DegreeName extends Model
{
    function degree(){
        return $this->hasMany('App\GraduateDegree', 'degroke_name_id', 'id');
    }
}
