@extends('layouts.app')

@section('content')
    <div style="margin-top: 100px">
        <fieldset>
            <legend>Seção Adotante</legend>
            <table>
                <thead>
                <td>Numero de Controle</td>
                <td>Protetor</td>
                <td>Estado</td>
                <td>Ações</td>
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
        </fieldset>
        <fieldset>
            <legend>Seção Protetor</legend>
            <div>
                <table>
                    <thead>
                    <tr>
                        <td>Numero de Controle</td>
                        <td>Adotante</td>
                        <td>Estado</td>
                        <td>Ações</td>
                    </tr>
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
            </div>
            <div>
                <table>
                    <thead>
                    <tr>
                        <td>Numero de Controle</td>
                        <td>Tipo</td>
                        <td>Cor</td>
                        <td>Sexo</td>
                    </tr>
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
            </div>
        </fieldset>
    </div>
@endsection
