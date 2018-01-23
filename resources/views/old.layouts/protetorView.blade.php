@extends('layouts.app2')

@section('content')
    <div class="cadastroAnimalContainer">
        <img class="cadastroProtetorFoto" src="http://placehold.it/250x250" alt="Foto do animal">
        <div class="cadastroProtetorInformacoes">
            <div class="grid-protetor">
                <p><b>Nome</b><br>{{$protetor->name}}</p>
                <p><b>Endereco</b><br>{{$protetor->endereco}}</p>
                <p><b>Telefone</b><br>{{$protetor->contato}}</p>
                <p><b>Facebook</b><br>{{$protetor->perfil}}</p>
                <p>
                    <b>Bio</b>
                    {{$protetor->obs}}
                </p>
            </div>
        </div>
    </div>
@endsection
