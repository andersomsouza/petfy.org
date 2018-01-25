<template>
    <div class="item-wrapper">
        <img :src="img" alt="" @click="toggleEstado ">
        <input type="hidden" :name="nome" :value="estado">
    </div>
</template>

<script>
    export default {
        name: "img-select",
        data(){
            return {
                estado:  true
            }
        },
        methods:{
            toggleEstado(event) {
                this.estado = !this.estado;
                let imagem = event.target;
                if(this.estado){
                    imagem.classList.add('inativo')
                }else{
                    imagem.classList.contains('inativo')?imagem.classList.remove('inativo'): '';
                }
            }
        }
        ,

        mounted(){
            //this.estado = this.estadoInicial;
        },
        props:[ "img","nome","estadoInicial" ]
    }
</script>

<style scoped>
    .item-wrapper{
        margin: 5px;
    }
    .inativo{
        filter: grayscale(100%);
    }
</style>