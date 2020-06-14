export default e => {
    e.prototype.setCollapse = function(vue = null, collapse){
        if(vue == null)
            this.option.collapse = {
                ...this.option.collapse,
                ...collapse
            }
        else
            for(let key in collapse)
                vue.$set(this.option.collapse, key, collapse[key]);
        return this;
    }
    e.prototype.getCollapse = function(key, defaultValue = null){
        return this.option.collapse[key] != null ? this.option.collapse[key] : defaultValue;
    }
    e.prototype.toggleCollapse = function(key, value = null){
        if(value != null){
            this.option.collapse[key] = value;
        } else {
            this.option.collapse[key] = !this.option.collapse[key];
        }
        this.setStore(`collapse/${key}`, this.option.collapse[key]);
        return this;
    }
}