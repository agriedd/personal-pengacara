export default e => {
    e.prototype.setTab = function(name){
        let tab_changed = this.option.tab != name;
        this.option.tab = name;
        if(tab_changed){
            //call on task change
            let action = this.getAction('tabChanged');
            if(action)
                action(name, this);
        }
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