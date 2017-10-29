<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Adocao extends Model
{

    public function adotante()
    {
        return $this->hasOne("App\User",  "id","adotante_id");
    }

    public function animal()
    {
        return $this->hasOne("App\Animal", "id", "adotado_id");
    }

    public function protetor()
    {
        return $this->hasOne("App\User", "id", "protetor_id");

    }
}
