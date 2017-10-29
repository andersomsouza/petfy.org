<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use \Request;
use App\Animal;

class AnimaisController extends Controller
{

    public function busca()
    {
        $animals = Animal::with('user')->whereNull('adocao_id')->get();
        return response()->json($animals);
    }
}
