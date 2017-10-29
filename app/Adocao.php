<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Adocao extends Model
{

    public function adotador(){
       return $this->hasOne("App\User","id_adotante","id");
    }

    public function animal(){
       return $this->hasOne("App\Animal","id_adotado");
    }

    public function protetor(){
       return $this->hasOne("App\User","id_protetor","id");

    }
}
