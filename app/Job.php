<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
    public  function applicants(){
        return $this->belongsToMany('App\Applicant');
    }
    public  function user(){
        return $this->belongsTo('App\User');
    }
}
