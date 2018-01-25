<template>
    <div>
        <div class="row">
            <div class="col s12 m6 l6"  v-for="animal of animais">
                <div class="card horizontal">
                    <div class="card-image">
                        <img :src="animal.foto">
                    </div>
                    <div class="card-stacked">
                        <div class="card-content">
                            <p>{{ animal.descricao }}</p>
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
    import Animal from '../../domain/animal/Animal.js';
    import BtnFiltrar from '../shared/btn-filtrar/BtnFiltrar'

    let animal = new Animal();
    animal.descricao = "Um pet fofinho";
    animal.foto = "http://via.placeholder.com/350x350";

    let animais = [];
    for (let i = 0; i < 5 ;i++){
        animais.push(animal);
    }
    export default {
        name: "explorar",
        data() {
            return {
                animais
            }
        },
        components: {
            'petfy-filtro':BtnFiltrar
        }
    }
</script>

<style scoped>


</style>