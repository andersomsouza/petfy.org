<template>
    <div class="col s12 m6" >

        <div class="card">
            <div class="card-image">
                <img :src="imgLoad" v-show="carregado">
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
    div,img{
        width: 100%;
    }
    p{
        text-overflow:ellipsis;
        white-space:nowrap;
        overflow:hidden;
    }
</style>