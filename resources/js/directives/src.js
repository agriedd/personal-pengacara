import { update } from "lodash";

export default {
    inserted: (el, bind)=>{
        let size = "sm";
        size = bind.arg != null ? bind.arg : size;
        if(bind.value != null)
            el.style.backgroundImage = `url('${bind.value[`src_${size}`]}')`;
    },
    update: (el, bind)=>{
        let size = "sm";
        size = bind.arg != null ? bind.arg : size;
        if(bind.value != null)
            el.style.backgroundImage = `url('${bind.value[`src_${size}`]}')`;
    }
}