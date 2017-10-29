<?php

namespace App\Http\Controllers;

use App\User;
use App\Adocao;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = Auth::user();
        $adotanteAdocoes = Adocao::where('adotante_id', $user->id)->get();
        $protetorAdocoes = Adocao::where('protetor_id', $user->id)->get();
        $animaisCadastrados = $user->animals()->get();
        return view('dashboard', ['adotanteAdocoes' => $adotanteAdocoes, 'protetorAdocoes' => $protetorAdocoes, 'animaisCadastrados' => $animaisCadastrados]);
    }

    public function cadastrar(){
       return view('cadastrarAnimal');
    }
}
