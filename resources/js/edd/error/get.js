export default E => {
    E.prototype.get = function(key, index = null){
        if(index != null)
            return this.has(key) ? this.data[key][index] : null;
        return this.data[key];
    }
}