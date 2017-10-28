<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Animal extends Model
{
    public function adotador(){
        $this->belongsTo('App\User');
    }
    //
}
