<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AnimalController extends Controller
{
    public function index($id){
        return 'Animal '.$id;
    }
    public function adota($id){
        return 'Adota '.$id;
    }
}
