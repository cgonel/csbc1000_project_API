<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class GraduateDegree extends Model
{
    protected $table = 'graduate_degrees';

    function graduates(){
        return $this->belongsTo('App\Graduate', 'graduate_id', 'id');
    }

    function degreeName(){
        return $this->belongsTo('App\DegreeName', 'degree_name_id', 'id');
    }

    function schoolName(){
        return $this->belongsTo('App\SchoolName', 'school_name_id', 'id');
    }
}
