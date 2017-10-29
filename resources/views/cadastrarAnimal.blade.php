@extends('layouts.app2')
@section('content')

    <div class="cadastrarAnimalContainer">
        <a id="btnCarregarImg">Carregar Imagem</a>
        <p id="imgSelecionada"></p>

        <div class="especie-wrapper">
            <span class="especie">Cão</span>
            <span class="especie active">Gato</span>
        </div>

        <div class="sexo-wrapper">
            <span class="sexo">Macho</span>
            <span class="sexo active">Fêmea</span>
        </div>

        <div class="cor-wrapper">
            <br>
            <p>Cor</p>
            <textarea id="cor" rows="2" cols="30" placeholder="Qual cor do seu animal?"></textarea>
        </div>

        <div class="porte-wrapper">
            <span class="porte">Pequeno</span>
            <span class="porte active">Médio</span>
            <span class="porte">Grande</span>
        </div>

        <div class="vacinado-wrapper">
            <span data-value="1" class="vacinado">Vacinado</span>
            <span data-value="0" class="vacinado active">Não Vacinado</span>
        </div>

        <div class="necessidades-wrapper">
            <br>
            <p>Necessidades Especiais?</p>
            <textarea id="necessidade" rows="5" cols="30"
                      placeholder="Descreva as necessidades especiais do animal aqui"></textarea>
        </div>


        <a id="btnSubmit" class="submeter" href="#">Submeter</a>

    </div>
    <form id="formCadastro" method="POST" enctype="multipart/form-data" action="{{action('AnimalController@cadastra')}}">
        <input id="vacinadoForm" type="hidden" name="vacinado" value="0">
        <input id="porteForm" type="hidden" name="porte" value="Médio">
        <input id="sexoForm" type="hidden" name="sexo" value="Fêmea">
        <input id="especieForm" type="hidden" name="tipo" value="Gato">
        <input id="necessidadeForm" type="hidden" name="necessidadesEspeciais" value="">
        <input id="corForm" type="hidden" name="cor" value="">
        <input style="width: 0px; height: 0px; overflow: hidden;" type="file" name="foto" id="file-upload">
        {{csrf_field()}}
    </form>
    <script>
        window.onload = function () {
            $('.vacinado-wrapper').click(function (event) {
                if ($(event.target).hasClass('vacinado')) {
                    $('.vacinado-wrapper .vacinado').removeClass('active');
                    $(event.target).addClass('active');
                    $('#vacinadoForm').val($(event.target).data('value'));
                }
                ;
            });
            $('.porte-wrapper').click(function (event) {
                if ($(event.target).hasClass('porte')) {
                    $('.porte-wrapper .porte').removeClass('active');
                    $(event.target).addClass('active');
                    $('#porteForm').val($(event.target).html());
                }
                ;
            });
            $('.sexo-wrapper').click(function (event) {
                if ($(event.target).hasClass('sexo')) {
                    $('.sexo-wrapper .sexo').removeClass('active');
                    $(event.target).addClass('active');
                    $('#sexoForm').val($(event.target).html());
                }
                ;
            });
            $('.especie-wrapper').click(function (event) {
                if ($(event.target).hasClass('especie')) {
                    $('.especie-wrapper .especie').removeClass('active');
                    $(event.target).addClass('active');
                    $('#especieForm').val($(event.target).html());
                }
                ;
            });
            $('#btnSubmit').click((event) => {
                event.preventDefault();
                $('#necessidadeForm').val($('#necessidade').val());
                $('#corForm').val($('#cor').val());
                $('#formCadastro').trigger('submit');
            });
            $('#file-upload').change(function () {
                var filepath = this.value;
                var m = filepath.match(/([^\/\\]+)$/);
                var filename = m[1];
                $('#imgSelecionada').html(filename);

            });
            $('#btnCarregarImg').click(() => {
                $('#file-upload').trigger('click');
            })
        }
    </script>
@endsection