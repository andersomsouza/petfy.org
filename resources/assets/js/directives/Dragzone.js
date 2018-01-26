export default {
    bind(el, binding, vnode){
        if(!Array.isArray(binding.value)){
            console.error("propriedade precisa ser array");
            return
        }
        el.addEventListener("dragover", (ev) => {
            ev.preventDefault();
        })
        el.addEventListener("drop", (ev) => {
            ev.preventDefault();
            console.log(ev);
            for(let i =0; i< ev.dataTransfer.files.length;i++){
                binding.value.push(ev.dataTransfer.files[i]);
            }

        })
    }
}