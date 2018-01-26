<template>
    <div>
        <div id="dragFotos" v-petfy-dragzone="fotos">
            <p>Arraste suas fotos ou click aqui</p>
        </div>
        <div>
            <div class="row">
                <div v-for="foto in fotos">
                    <petfy-img-drag :arquivo="foto" :key="foto.name" @remove="remove"></petfy-img-drag>
                </div>
            </div>

        </div>
    </div>

</template>

<script>
    import ImgDragged from '../shared/img-dragged/ImgDragged.vue';
    import DragzoneDirective from '../../directives/Dragzone';

    export default {
        name: "cadastro",
        directives: {
            'petfy-dragzone': DragzoneDirective
        },
        components: {
            'petfy-img-drag': ImgDragged
        },
        data() {
            return {
                fotos: []
            }
        },
        mounted() {


        },
        methods: {
            remove(arquivo) {
                console.log(arquivo);
                let indice = this.fotos.indexOf(arquivo);
                console.log(this.fotos[indice]);
                this.fotos.splice(indice, 1)
            }
        }
    }
</script>

<style scoped>
    #dragFotos {
        text-align: center;
        border: limegreen dashed 4pt;
        height: 50px;

    }

    #dragFotos p {
        position: relative;
        top: 50%;
        transform: translateY(-50%);
    }
</style>