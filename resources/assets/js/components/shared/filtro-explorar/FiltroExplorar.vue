<template>
    <div class="filtro-petfy">
        <div class="filtro-button" @click="toggleFiltro()">
            <p>Filtros</p>
        </div>
        <ul class="filtro-content collapse">
            <li>
                <fieldset>
                    <legend>
                        Espécie
                    </legend>
                    <div class="lista-itens lista-pet">
                        <petfy-img-select img="/img/icons/caoIcon.png"></petfy-img-select>
                        <petfy-img-select img="/img/icons/gatoIcon.png"></petfy-img-select>
                    </div>
                </fieldset>
            </li>
            <li>
                <fieldset>
                    <legend>Sexo</legend>
                    <div class="lista-itens lista-sexo">
                        <petfy-img-select img="/img/icons/maleIcon.png"></petfy-img-select>
                        <petfy-img-select img="/img/icons/femaleIcon.png"></petfy-img-select>
                    </div>
                </fieldset>

            </li>
            <li>
                <fieldset>
                    <legend>Porte</legend>
                    <div class="lista-itens lista-tamanho">
                        <petfy-img-select img="/img/icons/dog-paw-p.png"></petfy-img-select>
                        <petfy-img-select img="/img/icons/dog-paw-m.png"></petfy-img-select>
                        <petfy-img-select img="/img/icons/dog-paw-g.png"></petfy-img-select>
                    </div>
                </fieldset>

            </li>
        </ul>
    </div>
</template>

<script>
    import $ from 'jquery';
    import 'materialize-css';
    import ImgSelect from '../img-select/ImgSelect';
    let filtroEl;
    export default {
        name: "btn-filtrar",
        components: {
            "petfy-img-select": ImgSelect
        },
        mounted(){
            filtroEl = document.querySelector('.filtro-content');
            console.log(filtroEl);

        }
        ,
        methods: {
            toggleFiltro(){
                if(filtroEl.classList.contains('collapse')){
                    filtroEl.classList.remove('collapse')
                }else{
                    filtroEl.classList.add('collapse')
                }
            }

        }
    }
</script>

<style scoped>
    input[type=checkbox]:checked + label {
        filter: grayscale(100%);
    }

    .filtro-petfy {
        width: 100%;

        position: fixed;
        bottom: 0px;
        background-color: white;
    }

    .lista-itens {
        display: flex;
        flex-flow: row nowrap;
        align-items: center;
        align-content: space-between;

    }
    .filtro-content{
    overflow: hidden;
        max-height: 100vh;
        transition: max-height 0.5s;
    }
    .collapse{
        max-height: 0;
       // opacity: 0;
    }

    ul {

        display: flex;
        flex-flow:  row wrap;
        justify-content: space-around;
    }
    fieldset{
        margin-top:15px;
        margin-bottom: 15px;
        border-radius: 15px;
        background-color: rgba(200,200,200,0.3);

    }

    .filtro-button{
        background-color: #FF6F00;
        color:white;
        height: 30px;
        text-align: center;

    }
    .filtro-button p {
        top: 50%;
        position: relative;
        transform: translateY(-50%);
    }


</style>