
export default {
    bind: (el, bind)=>{
        let tmpImg = document.createElement('img');
        let src = bind.value;
        el.style.background = "#cfcfcf";
        tmpImg.onload = function(e){
            el.src = src;
        }
        tmpImg.src = src;
        tmpImg = null;
    },
    inserted: (el, bind)=>{

    },
    update: (el, bind)=>{
        
    }
}