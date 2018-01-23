@extends('layouts.app')

@section('content')
    <div class="principal">
        <div class="container">
            <img src="img/logo-04.png" alt="Petfy"/>
            <h3>Adote um animalzinho hoje!</h3>
            <a class="adotarBtn" href="{{action('AnimalController@filtro')}}">Quero Adotar!</a>
            <a class="cadastrarBtn" href="{{action('HomeController@cadastrar')}}">Quero botar para adoção!</a>
        </div>
    </div>
@endsection