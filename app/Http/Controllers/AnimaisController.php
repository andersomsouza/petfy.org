<?php

namespace App\Http\Controllers;

use \Request;
use App\Animal;

class AnimaisController extends Controller
{

    public function busca()
    {
        DB::table('animals')
            ->whereNull('adocao_id')
            ->get();
        return response()->json(Animal::all());
    }
}
