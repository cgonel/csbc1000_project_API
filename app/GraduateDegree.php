<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class GraduateDegree extends Model
{
    protected $table = 'graduate_degrees';

    function graduates(){
        return $this->belongsTo('App\Graduate', 'graduate_id', 'id');
    }
}
