@extends('layouts.app2')

@section('content')
    <div class="cadastroAnimalContainer">
        <img class="cadastroAnimalFoto" src="http://placehold.it/250x250" alt="Foto do animal">
        <div class="cadastroAnimalInformacoes">
            <div class="grid-1">
                <p><b>Nome</b><br>{{$protetor->name}}</p>
                <p><b>Endereco</b><br>{{$protetor->endereco}}</p>
                <p><b>Telefone</b><br>{{$protetor->contato}}</p>
                <p><b>Facebook</b><br>{{$protetor->prefil}}</p>
                <p>
                    <b>Bio</b>
                    {{$protetor->obs}}
                </p>
            </div>
            <div class="grid-2">
            </div>
            <div class="grid-3">

            </div>
        </div>
    </div>
@endsection
