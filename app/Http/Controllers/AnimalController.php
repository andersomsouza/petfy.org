<?php

namespace App\Http\Controllers;

use Faker\Provider\Image;
use Illuminate\Support\Facades\Auth;
use \Request;
use App\Animal;
use App\User;

class AnimalController extends Controller
{
    public function explorar()
    {
        $animals = Animal::with('user')->whereNull('adocao_id')->get();
        return view('listaView', ['animals' => $animals]);
    }

    public function index($id)
    {
        return view('animalView')->with(['animal' => Animal::with('user')->find($id)]);
    }

    public function adota($id)
    {
        return view('protetorView', ['protetor' => Animal::find($id)->user()->first()]);
    }

    public function cadastra()
    {
        $animal = new Animal();
        $query = Request::all();
        $animal->fill($query);

        $image = request()->file('foto');
        if (!empty($image)) {
            $photoName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('images'), $photoName);
            $animal->picture = $photoName;
        }

        $user = Auth::user();
        $user->animals()->save($animal);
        return redirect()->action('HomeController@index');
    }

    public function filtro()
    {
        return view('filtrarView');
    }
}
