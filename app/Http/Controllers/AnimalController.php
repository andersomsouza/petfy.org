<?php

namespace App\Http\Controllers;

use \Request;
use App\Animal;
use App\User;

class AnimalController extends Controller
{
    public function index($id)
    {
        return view('animalView')->with(['animal' => Animal::with('user')->find($id)]);
    }

    public function adota($id)
    {

    }

    public function cadastra()
    {
        $animal = new Animal();

        $query = Request::all();
        $animal->fill($query);

        $user = Auth::user();
        $user->animais()->save($animal);
    }
}
