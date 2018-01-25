export default class Animal {
    constructor(descricao = "", foto = "", idade = "", porte = ""){
        this._descricao = descricao;
        this._foto = foto;
        this._idade = idade;
        this._porte = porte;
    }


    get foto(){
        return this._foto;
    }
    get descricao(){
        return this._descricao;
    }
    get idade(){
        return this._idade;
    }
    get porte(){
        return this._porte;
    }


    set idade(value) {
        this._idade = value;
    }

    set descricao(value) {
        this._descricao = value;
    }

    set foto(value) {
        this._foto = value;
    }

    set porte(value) {
        this._porte = value;
    }
}