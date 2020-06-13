export default E => E.prototype.count = function(key){
    return this.has(key) ? this.get(key).length : 0;
}