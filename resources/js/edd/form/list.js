export default e => {
    e.prototype.getList = function(key){
        return this.option.list[key];
    }
    e.prototype.pushList = function(vue, key, value){
        if(!this.listExist(key))
            vue.$set(this.option.list, key, [])
        this.option.list[key].push(value)
        return this
    }
    e.prototype.removeList = function(key, value){
        if(this.hasList(key, value)){
            let index = this.option.list[key].findIndex(e => e == value)
            if(index != -1)
                this.option.list[key].splice(index, 1);
        }
        return true;
    }
    e.prototype.clearList = function(vue, key){
        vue.$delete(this.option.list, key);
    }
    e.prototype.hasList = function(key, value){
        return this.listExist(key)
            && Array.isArray(this.option.list[key]) 
            && this.option.list[key].includes(value);
    }
    e.prototype.listExist = function(key){
        return this.option.list[key] != null;
    }
    e.prototype.toggleList = function(vue, key, value){
        if(this.hasList(key, value))
            this.removeList(key, value)
        else
            this.pushList(vue, key, value)
        return this
    }
}