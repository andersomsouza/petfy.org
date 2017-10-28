<?php

namespace App\Http\Controllers;

use \Request;
use App\Animal;

class AnimaisController extends Controller
{

    public function busca()
    {
        return response()->json(Animal::all());
    }
}
