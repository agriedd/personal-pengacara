export default e => {
    e.prototype.get = function(key){
        return this.data[key]
    }
    e.prototype.set = function(key, value){
        this.data[key] = value
        return this;
    }

    
    e.prototype.setStore = function(key, value, pathStatus = true){
        if(pathStatus){
            let path = window.location.pathname;
            key = `${path}@${key}`;
        }
        window.localStorage.setItem(key, value);
        return this;
    }
    e.prototype.getStore = function(key, defaultValue = null, parser = null, pathStatus){
        if(pathStatus){
            let path = window.location.pathname;
            key = `${path}@${key}`;
        }
        let value = window.localStorage.getItem(key);
        if(typeof parser === "function" && value != null) return parser(value);
        if(value == null) return defaultValue;
        return value;
    }
    
    e.prototype.resetForm = function(vue = null){
        this.data = Object.assign({}, this.original);
        this.resetImage(vue);
        this.clearSelected();
    }
}