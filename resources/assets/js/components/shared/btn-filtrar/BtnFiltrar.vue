<template>
    <div>
        <div class="fixed-action-btn" @mouseover="openToolbar()">
            <a class="btn-floating btn-large red">
                <i class="large material-icons">mode_edit</i>
            </a>
            <ul>
                <li>
                    <form action="">
                        <div class="lista-itens lista-tamanho">
                            <petfy-img-select  img="/img/dog-paw-p.png"></petfy-img-select>
                            <petfy-img-select  img="/img/dog-paw-m.png"></petfy-img-select>
                            <petfy-img-select  img="/img/dog-paw-g.png"></petfy-img-select>
                        </div>
                    </form>
                </li>
                <li><a class="btn-floating yellow darken-1"><i class="material-icons">format_quote</i></a></li>
                <li><a class="btn-floating green"><i class="material-icons">publish</i></a></li>
                <li><a class="btn-floating blue"><i class="material-icons">attach_file</i></a></li>
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
        components:{
            "petfy-img-select": ImgSelect
        },
        methods: {
            openToolbar(){
                $('.fixed-action-btn.toolbar').openFAB();
            }
        },

    }
</script>

<style scoped>
    input[type=checkbox]:checked + label{
        filter: grayscale(100%);
    }
    .teste-class{
        height: 50px;
    }
    .lista-itens{
        display: flex;
        flex-flow: row nowrap;
        align-items: center;
        align-content: space-between;

    }
    .lista-tamanho{
        margin-left: -20px;
    }

    fixed-action-btn {
        right:50px;
    }

</style>