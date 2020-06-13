export default Error => {
    Error.prototype.has = function(key){
        return this.data[key] != null && this.data[key].length
    }
}