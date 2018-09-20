<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Patient extends Model
{
    public function notes()
    {
        return $this->hasMany('App\Note','patient_id','id');
    }
}
