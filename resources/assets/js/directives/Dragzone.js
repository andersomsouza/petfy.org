export default {
    bind(el, binding, vnode){
        let inp = document.createElement('input');
        inp.type = "file";
        inp.multiple = true;
        inp.style = "width:0.01px;height:0.01px;";
        inp.addEventListener("change",(ev)=>{
            for(let i =0; i< ev.target.files.length;i++){
                binding.value.push(ev.target.files[i]);
            }
        })
        el.appendChild(inp);
        if(!Array.isArray(binding.value)){
            console.error("propriedade precisa ser array");
            return
        }
        el.addEventListener('click',()=>{
            inp.click();
        })
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