<template>
    <div>
        <div class="row">
            <div class="col s12 m6 l6"  v-for="animal of animais">
                <div class="card horizontal">
                    <div class="card-image">
                        <img src="http://via.placeholder.com/350x350">
                    </div>
                    <div class="card-stacked">
                        <div class="card-content">
                            <p>Descrição cachorrinho fofinho.</p>
                        </div>
                        <div class="card-action">
                            <a href="#">Quero adotar!</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <petfy-filtro></petfy-filtro>
    </div>



    </template>

<script>
    import Animal from '../../domain/animal/Animal';
    import BtnFiltrar from '../shared/btn-filtrar/BtnFiltrar'

    export default {
        name: "explorar",
        data() {
            return {
                animais: [0,1,2,3,4]
            }
        },
        components: {
            'petfy-filtro':BtnFiltrar
        }
    }
</script>

<style scoped>


</style>