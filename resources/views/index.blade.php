@extends('layouts.app')

@section('content')
    <div class="principal">
        <div class="container">
            <h2>Petotas</h2>
            <h3>Adote um animalzinho hoje!</h3>
            <a class="adotarBtn" href="{{action('AnimalController@explorar')}}">Quero Adotar!</a>
            <a class="cadastrarBtn" href="{{action('HomeController@cadastrar')}}">Quero botar para adoção!</a>
        </div>
    </div>
@endsection