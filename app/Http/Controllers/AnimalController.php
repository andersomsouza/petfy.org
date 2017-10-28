<?php

namespace App\Http\Controllers;

use \Request;
use App\Animal;
use App\User;
class AnimalController extends Controller
{
    public function index($id){
        return 'Animal '.$id;
    }
    public function adota($id){

    }

    public function cadastra(){
        $animal = new Animal();

        $query = Request::all();
        $animal->fill($query);

        $user = Auth::user();
        $user->animais()->save($animal);
    }
}
