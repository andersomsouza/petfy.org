<template>
    <div class="container">
        <form action="" id="formPet">
            <div class="row">
                <div class="input-field col s12">

                    <select>
                        <option value="1" selected>Cão</option>
                        <option value="2">Gato</option>
                    </select>
                    <label>Tipo</label>
                </div>

                <div class="input-field col s12">

                    <select>
                        <option value="" disabled selected>Selecione</option>
                        <option value="1">Pequeno</option>
                        <option value="2">Medio</option>
                        <option value="3">Grande</option>
                    </select>
                    <label>Porte</label>
                </div>
                <div id="idade" class="col s12">
                    <label for="">Idade aproximada</label>
                    <div  style="margin-top:5px">
                        <p>{{idade.ano}} ano(s), {{idade.mes}} meses, {{idade.dia}} dias.</p>

                        <p class="range-field">
                            <input type="range" id="idade-dia" min="0" max="30" v-model="idade.dia"/>
                        </p>
                        <p class="range-field">
                            <input type="range" id="idade-mes" min="0" max="11" v-model="idade.mes"/>
                        </p>
                        <p class="range-field">
                            <input type="range" id="idade-ano" min="0" max="20" v-model="idade.ano"/>
                        </p>
                    </div>

                </div>
                <div class="col s12">
                    <p>
                        <input type="checkbox" class="filled-in" id="box-vacinado" checked="checked"/>
                        <label for="box-vacinado">Vacinado</label>
                    </p>
                    <p>
                        <input type="checkbox" class="filled-in" id="filled-in-box" checked="checked"/>
                        <label for="filled-in-box">Castrado</label>
                    </p>

                </div>
                <div class="input-field col s12">

                    <select>
                        <option value="" disabled selected>Selecione</option>
                        <option value="1">Macho</option>
                        <option value="2">Femea</option>
                    </select>
                    <label>Sexo</label>
                </div>
            </div>
        </form>
        <div id="dragzone">
            <div id="dragFotos" v-petfy-dragzone="fotos">

                <p>Arraste suas fotos ou click aqui</p>
            </div>
            <div class="scrollbar-horizontal">
                <petfy-img-drag v-for="foto in fotos" :arquivo="foto" :key="foto.name"
                                @remove="remove"></petfy-img-drag>
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
                fotos: [],
                idade: {ano: 0, mes: 0, dia: 0}
            }
        },
        mounted() {
            $('select').material_select();

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

    .scrollbar-horizontal {
        overflow-x: auto;
        display: flex;
        flex-wrap: nowrap;
        -webkit-overflow-scrolling: touch;
    }

    #dragFotos p {
        position: relative;
        top: 50%;
        transform: translateY(-50%);
    }

    form {
        margin-top: 10px;
    }
</style>