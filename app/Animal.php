<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Animal extends Model
{

    protected $fillable = [
        'tipo', 'sexo', 'cor', 'porte', 'idade', 'castrado', 'vacinado', 'adocao_id', 'cadastrante_id'
    ];


    public function user(){
       return $this->belongsTo('App\User');

    }

}
