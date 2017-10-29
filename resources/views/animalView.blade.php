@extends('layouts.app')

@section('content')
    <header>
        <h1>Petotas</h1>
        <a href="#">Entre/Cadastre-se</a>
    </header>

    <div class="cadastroAnimalContainer">
        <img class="cadastroAnimalFoto" src="../img/dog.jpeg" alt="Foto do animal">
        <div class="cadastroAnimalInformacoes">
            <div class="grid-1">
                <p><b>Sexo</b><br>Fêmea</p>
                <p><b>Cor</b><br>Mesclado</p>
                <p><b>Porte</b><br>Grande</p>
            </div>
            <div class="grid-2">
                <p><b>Idade</b><br>2 anos</p>
                <p><b>Castrado</b><br>Sim</p>
                <p><b>Vacinado</b><br>Desconhecido</p>
            </div>
            <div class="grid-3">
                <b>Necesidades Especiais</b>
                <p>
                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
                </p>
            </div>
        </div>

        <button class="perfilAnimal" type="button">Quero Adotar</button>
    </div>
@endsection
