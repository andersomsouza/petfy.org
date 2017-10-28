<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Adocao extends Model
{
    //
    public function adotador(){
        $this->hasOne("App\User");
        $this->hasOne("App\User","id_adotante","id");
    }

    public function animal(){
        $this->hasOne("App\Animal","id_adotado");
    }

    public function protetor(){
        $this->hasOne("App\User","id_protetor","id");
    }
}
