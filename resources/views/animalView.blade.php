@extends('layouts.app2')

@section('content')


    <div class="cadastroAnimalContainer">
        <img class="cadastroAnimalFoto" src="@if(empty($animal->picture)) ../img/dog.jpeg @else /images/{{$animal->picture}} @endif" alt="Foto do animal">
        <div class="cadastroAnimalInformacoes">
            <div class="grid-1">
                <p><b>Sexo</b><br>{{$animal->sexo}}</p>
                <p><b>Cor</b><br>{{$animal->cor}}</p>
                <p><b>Porte</b><br>{{$animal->porte}}</p>
            </div>
            <div class="grid-2">
                <p><b>Idade</b><br>{{$animal->idade}} Anos</p>
                <p><b>Castrado</b><br>@if($animal->castrado)Sim @else Não @endif</p>
                <p><b>Vacinado</b><br>@if($animal->vacinado)Sim @else Não @endif</p>
            </div>
            <div class="grid-3">
                <b>Necesidades Especiais</b>
                <p>
                    {{$animal->necessidadesEspeciais}}
                </p>
            </div>
        </div>

        <button class="perfilAnimal"  onclick="window.location.href = '{{action('AnimalController@adota', ['id' => $animal->id])}}'" type="button">Quero Adotar</button>
    </div>
@endsection
