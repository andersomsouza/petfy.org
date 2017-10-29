@extends('layouts.app')

@section('content')
    @php
        \Carbon\Carbon::setLocale('pt');
    @endphp
    <div class="resultadoPesquisaAnimal">
        @foreach($animals as $animal)
            <div class="animal"
                 onclick="window.location.href = '{{action('AnimalController@index',['id'=>$animal->id])}}'">
                <img src=" @if(empty($animal->picture)) http://placehold.it/150x150 @else /images/{{$animal->picture}} @endif "
                     alt="">
                <p>{{$animal->sexo}}, esperando desde {{$animal->created_at->diffForHumans(\Carbon\Carbon::now())}}</p>
            </div>
        @endforeach
    </div>

@endsection