export default e => {
    e.prototype.setTab = function(name){
        this.option.tab = name;
        return this;
    }
    e.prototype.tab = function(){
        return this.option.tab;
    }
    e.prototype.isTab = function(name){
        if(Array.isArray(name)){
            let found = false;
            name.forEach(e=>{
                if(e == this.option.tab) found = true;
            });
            if(found) return true;
            return false;
        }
        return this.option.tab == name;
    }
}