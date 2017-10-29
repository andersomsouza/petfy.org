<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Animal extends Model
{

    protected $fillable = [
        'tipo', 'sexo', 'cor', 'porte', 'idade', 'castrado', 'vacinado', 'necessidadesEspeciais'
    ];


    public function user(){
       return $this->belongsTo('App\User');

    }
    public function adocao(){
        return $this->hasOne('App\Adocao','id');
    }

}
