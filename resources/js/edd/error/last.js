export default E => E.prototype.last = function(key){
    return this.has(key) ? this.get(key, this.count(key) - 1) : null;
}