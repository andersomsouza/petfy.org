@extends('layouts.app')

@section('content')

    <div class="container-filtro">

        <h2>O que procuras?</h2>
        <div data-value="Gato" class="item tipog selected">
            <img src="../img/gatoIcon.png">
            <h3>Gato</h3>
        </div>
        <div data-value="Cão"  class="item tipoc">
            <img src="../img/caoIcon.png">
            <h3>Cão</h3>
        </div>

        <h2>Qual sexo?</h2>
        <div data-value="Macho" class="item tipom selected">
            <img src="../img/mIcon.png">
            <h3>Fêmea</h3>
        </div>
        <div data-value="Fêmea" class="item tipoh">
            <img src="../img/hIcon.png">
            <h3>Macho</h3>
        </div>

        <div class="porte-grid">
            <h2>Porte</h2>
            <div data-value="Pequeno" class="item tipoP selected">
                <img id="pequena" src="../img/dog-paw-g.png">
            </div>
            <div data-value="Médio" class="item tipoM">
                <img id="media" src="../img/dog-paw-g.png">
            </div>
            <div data-value="Grande" class="item tipoG">
                <img id="grande" src="../img/dog-paw-g.png">
            </div>
        </div>


        <h2>E a idade?</h2>
        <form id="form-busca" method="GET" action="{{action('AnimalController@explorar')}}">
            <input class="range" type="range" name="seletor-idade" min="1" max="15" step="1" value="1">
            <p class="text">Aproximadamente <span class="show">1</span> ano(s)</p>
            <a id="btnSubmit" class="submeter" href="{{action('AnimalController@filtro')}}"><p>Encontrar!</p></a>
            <input id="tipo-form" type="hidden" name="tipo" value="">
            <input id="genero-form" type="hidden" name="genero" value="">
            <input id="porte-form" type="hidden" name="porte" value="">
            <input id="idade-form" type="hidden" name="idade" value="">
        </form>
    </div>
    <script>
        window.onload = function () {
            $('.tipoc').click(function (event) {
                if (!$('.tipoc').hasClass('selected')) {
                    $('.tipoc').addClass('selected');
                    $('.tipog').removeClass('selected');
                    $('#tipo-form').val($(event.target).data('value'));
                }
            });
            $('.tipog').click(function (event) {
                if (!$('.tipog').hasClass('selected')) {
                    $('.tipog').addClass('selected');
                    $('.tipoc').removeClass('selected');
                    $('#tipo-form').val($(event.target).data('value'));
                }
            });
            $('.tipoh').click(function () {
                if (!$('.tipoh').hasClass('selected')) {
                    $('.tipoh').addClass('selected');
                    $('.tipom').removeClass('selected');
                    $('#genero-form').val($(event.target).data('value'));
                }
            });
            $('.tipom').click(function () {
                if (!$('.tipom').hasClass('selected')) {
                    $('.tipom').addClass('selected');
                    $('.tipoh').removeClass('selected');
                    $('#genero-form').val($(event.target).data('value'));
                }
            });
            $('.tipoP').click(function () {
                if (!$('.tipoP').hasClass('selected')) {
                    $('.tipoP').addClass('selected');
                    $('.tipoM').removeClass('selected');
                    $('.tipoG').removeClass('selected');
                    $('#porte-form').val($(event.target).data('value'));
                }
            });
            $('.tipoM').click(function () {
                if (!$('.tipoM').hasClass('selected')) {
                    $('.tipoM').addClass('selected');
                    $('.tipoP').removeClass('selected');
                    $('.tipoG').removeClass('selected');
                    $('#porte-form').val($(event.target).data('value'));
                }
            });
            $('.tipoG').click(function () {
                if (!$('.tipoG').hasClass('selected')) {
                    $('.tipoG').addClass('selected');
                    $('.tipoM').removeClass('selected');
                    $('.tipoP').removeClass('selected');
                    $('#porte-form').val($(event.target).data('value'));
                }
            });

            /*Range Button*/
            $('.range').change(function (event) {
                $('.show').text($('.range').val());
                $('#idade-form').val($(event.target).data('value'));
            });

            $('#btnSubmit').click((event) => {
                event.preventDefault();
                $('#form-busca').trigger('submit');
            });
        };</script>
@endsection