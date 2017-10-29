@extends('layouts.app2')
@section('content')
    <div class="dashboardContainer">
        <h1>Adotante</h1>
        <table>
            <thead>
            <td class="cabecalho">ID</td>
            <td class="cabecalho">Protetor</td>
            <td class="cabecalho">Estado</td>
            <td class="cabecalho">Ações</td>
            </thead>
            <tbody>
            @foreach($adotanteAdocoes as $adotanteAdocao)
                <tr>
                    <td>{{$adotanteAdocao->id}}</td>
                    <td>{{$adotanteAdocao->protetor()->name}}</td>
                    <td>Em processo</td>
                    <td></td>
                </tr>
            @endforeach
            </tbody>
        </table>

        <h1>Protetor</h1>
        <table>
            <thead>
            <td class="cabecalho">ID</td>
            <td class="cabecalho">Adotante</td>
            <td class="cabecalho">Estado</td>
            <td class="cabecalho">Ações</td>
            </thead>
            <tbody>
            @foreach($protetorAdocoes as $protetorAdocao)
                <tr>
                    <td>{{$protetorAdocao->id}}</td>
                    <td>{{$protetorAdocao->adotante()->name}}</td>
                    <td>Em processo</td>
                    <td></td>
                </tr>
            @endforeach
            </tbody>
        </table>
        <h1>Animais Cadastrados</h1>
        <table>
            <thead>
            <td class="cabecalho">ID</td>
            <td class="cabecalho">Espécie</td>
            <td class="cabecalho">Cor</td>
            <td class="cabecalho">Sexo</td>
            </thead>
            <tbody>
            @foreach($animaisCadastrados as $animal)
                <tr>
                    <td>{{$animal->id}}</td>
                    <td>{{$animal->tipo}}</td>
                    <td>{{$animal->cor}}</td>
                    <td>{{$animal->sexo}}</td>
                </tr>
            @endforeach
            </tbody>
        </table>
        <h1>Mais animais para doar?</h1>
        <a href="{{action('HomeController@cadastrar')}}">Cadastre!</a>
    </div>
@endsection