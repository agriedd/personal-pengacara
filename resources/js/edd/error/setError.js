export default Error => {
    Error.prototype.setError = function(data, vue = null){
        for(let key in data)
            if(vue)
                vue.$set(this.data, key, data[key]);
            else
                this.data[key] = data[key];
        return this;
    }
}