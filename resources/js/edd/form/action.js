export default e => {
    e.prototype.pushAction = function(name, action){
        this.action[name] = action;
        return this;
    }
    e.prototype.getAction = function(name){
        return this.action[name];
    }
}