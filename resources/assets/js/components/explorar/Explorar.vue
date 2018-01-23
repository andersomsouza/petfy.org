<template>
    <div>
        <div class="row">
            <div class="col s12 m6">
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
        <div>
            <div class="filtrar-btn">Filtrar</div>
        </div>
    </div>



    </template>

<script>
    import Animal from '../../domain/animal/Animal';

    export default {
        name: "explorar",
        data() {
            return {
                animais: []
            }
        }
    }
</script>

<style scoped>
    .filtrar-btn{
        position: fixed;
        bottom: 0;
        left: 50%;
        transform: translateX(-50%);
        margin-bottom: 16px;
        background: #ff6f00;
        padding: 16px;
        color: white;
        border-radius: 22px;
    }

</style>