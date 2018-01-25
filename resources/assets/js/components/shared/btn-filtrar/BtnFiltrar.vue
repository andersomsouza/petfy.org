<template>
    <div>
        <div class="fixed-action-btn" @mouseclick="openToolbar()">
            <a class="btn-floating btn-large">
                <i class="large material-icons">mode_edit</i>
            </a>
            <ul>
                <li class="lista-itens lista-pet">
                    <petfy-img-select img="/img/icons/caoIcon.png"></petfy-img-select>
                    <petfy-img-select img="/img/icons/gatoIcon.png"></petfy-img-select>
                </li>
                <li class="lista-itens lista-sexo">
                    <petfy-img-select img="/img/icons/maleIcon.png"></petfy-img-select>
                    <petfy-img-select img="/img/icons/femaleIcon.png"></petfy-img-select>
                </li>
                <li class="lista-itens lista-tamanho">
                        <petfy-img-select img="/img/icons/dog-paw-p.png"></petfy-img-select>
                        <petfy-img-select img="/img/icons/dog-paw-m.png"></petfy-img-select>
                        <petfy-img-select img="/img/icons/dog-paw-g.png"></petfy-img-select>
                </li>
            </ul>
        </div>
    </div>
</template>

<script>
    import $ from 'jquery';
    import 'materialize-css';
    import ImgSelect from '../img-select/ImgSelect';

    export default {
        name: "btn-filtrar",
        components: {
            "petfy-img-select": ImgSelect
        },
        methods: {
            openToolbar() {
                $('.fixed-action-btn.toolbar').openFAB();
            }
        },

    }
</script>

<style scoped>
    input[type=checkbox]:checked + label {
        filter: grayscale(100%);
    }

    .teste-class {
        height: 50px;
    }

    .lista-itens {
        display: flex;
        flex-flow: row nowrap;
        align-items: center;
        align-content: space-between;

    }

    .lista-tamanho {
        margin-left: -20px;
    }
    .lista-pet, .lista-sexo {
        margin-left: -10px;
    }
    .fixed-action-btn {
        right: 40px;
    }
    .fixed-action-btn ul li {
         margin-bottom: 0px;
    }
    .btn-floating {
        background-color: limegreen !important;
    }
</style>