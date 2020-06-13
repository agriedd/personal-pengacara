export default E => {
    E.prototype.first = function(key){
        return this.has(key) ? this.get(key, 0) : null;
    }
}