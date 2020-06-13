export default E => E.prototype.clear = function(vue, key = null){
    if(key){
        vue.$delete(this.data, 'key');
        this.data[key] = null;
        delete this.data[key];
    } else
        this.data = {};
    return this;
}