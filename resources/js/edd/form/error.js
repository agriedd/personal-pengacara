export default e => {
    
    e.prototype.setError = function(){
        if(window.Errors != undefined)
            return this.error = new window.Errors({});
        this.error = {};
        return this;
    }
}