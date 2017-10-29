<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class ProtetorController extends Controller
{
    public function perfil($id)
    {
        return view('protetorView', ['protetor' => User::find($id)]);
    }
}