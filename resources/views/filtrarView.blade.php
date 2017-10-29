@extends('layouts.app')

@section('content')

    <div class="container-filtro">

        <h2>O que procuras?</h2>
        <div class="item tipog selected">
            <img src="../img/gatoIcon.png">
            <h3>Gato</h3>
        </div>
        <div class="item tipoc">
            <img src="../img/caoIcon.png">
            <h3>Cão</h3>
        </div>

        <h2>Qual sexo?</h2>
        <div class="item tipom selected">
            <img src="../img/mIcon.png">
            <h3>Fêmea</h3>
        </div>
        <div class="item tipoh">
            <img src="../img/hIcon.png">
            <h3>Macho</h3>
        </div>

        <div class="porte-grid">
            <h2>Porte</h2>
            <div class="item tipoP selected">
                <img id="pequena" src="../img/dog-paw-g.png">
            </div>
            <div class="item tipoM">
                <img id="media" src="../img/dog-paw-g.png">
            </div>
            <div class="item tipoG">
                <img id="grande" src="../img/dog-paw-g.png">
            </div>
        </div>


        <h2>E a idade?</h2>
        <form>
            <input class="range" type="range" name="seletor-idade" min="1" max="15" step="1" value="1">
            <p>Aproximadamente <span class="show">1</span> ano(s)</p>
            <button type="button">Encontrar!</button>
            <input type="hidden" name="tipo">
            <input type="hidden" name="genero">
            <input type="hidden" name="tamanho">
        </form>
    </div>
    <script>
        window.onload = function () {
            $('.tipoc').click(function () {
                if (!$('.tipoc').hasClass('selected')) {
                    $('.tipoc').addClass('selected');
                    $('.tipog').removeClass('selected');
                }
            });
            $('.tipog').click(function () {
                if (!$('.tipog').hasClass('selected')) {
                    $('.tipog').addClass('selected');
                    $('.tipoc').removeClass('selected');
                }
            });
            $('.tipoh').click(function () {
                if (!$('.tipoh').hasClass('selected')) {
                    $('.tipoh').addClass('selected');
                    $('.tipom').removeClass('selected');
                }
            });
            $('.tipom').click(function () {
                if (!$('.tipom').hasClass('selected')) {
                    $('.tipom').addClass('selected');
                    $('.tipoh').removeClass('selected');
                }
            });
            $('.tipoP').click(function () {
                if (!$('.tipoP').hasClass('selected')) {
                    $('.tipoP').addClass('selected');
                    $('.tipoM').removeClass('selected');
                    $('.tipoG').removeClass('selected');
                }
            });
            $('.tipoM').click(function () {
                if (!$('.tipoM').hasClass('selected')) {
                    $('.tipoM').addClass('selected');
                    $('.tipoP').removeClass('selected');
                    $('.tipoG').removeClass('selected');
                }
            });
            $('.tipoG').click(function () {
                if (!$('.tipoG').hasClass('selected')) {
                    $('.tipoG').addClass('selected');
                    $('.tipoM').removeClass('selected');
                    $('.tipoP').removeClass('selected');
                }
            });

            /*Range Button*/
            $('.range').change(function () {
                $('.show').text($('.range').val());

            });
        };</script>
@endsection