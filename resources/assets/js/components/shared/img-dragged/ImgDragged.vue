<template>
    <div class="card-wrapper" >

        <div class="card">
            <div class="card-image">
                <div class="img-wrapper">
                    <img :src="imgLoad" v-show="carregado">
                </div>
                <a class="btn-floating halfway-fab waves-effect waves-light red" @click="remove"><i class="material-icons">remove</i></a>
            </div>
            <div class="card-content">
                <p>{{arquivo.name}}</p>
            </div>
        </div>
    </div>

</template>

<script>
    export default {
        name: "img-dragged",
        data(){
            return {
                imgLoad : '',
                carregado : false
            }
        },
        props : ['arquivo'],
        mounted(){
            console.log("montado");
            var reader = new FileReader();

            reader.onload = (e)=> {
                this.imgLoad = reader.result
                this.carregado = true;
            }
            console.log(this.arquivo)
            reader.readAsDataURL(this.arquivo);
        },
        methods: {
            remove(ev){
                ev.preventDefault();
                this.$emit('remove',this.arquivo);
            }
        }
    }
</script>

<style scoped>
    p{
        text-overflow:ellipsis;
        white-space:nowrap;
        overflow:hidden;
    }
    .card-wrapper{
        flex: 0 0 auto;
        width: 50vw;
    }
    .card {
        margin: 5px;
    }
    img{
        height: 100%;
        width: auto !important;
        position: relative;
        left: 50% !important;
        transform: translateX(-50%);
    }
    .img-wrapper{
        overflow: hidden;
        width: 100%;
        height: 100%;
    }
    .card-image{
        height: 50vw;
        width:100%;
    }
</style>