export default e => {
    
    /** 
     * @deprecated 💔
     * 
     */
    e.prototype.getSelected = function(key = null){
        if(key) return this.option.selected[key];
        return this.option.selected;
    }
    e.prototype.setSelected = function(data){
        /** @version old */
        this.option.selected = data;

        // new 🔥
        for(let key in this.data)
            if(data[key] != null)
                this.data[key] = data[key];
    }
    e.prototype.clearSelected = function(){
        this.option.selected = null;
        return this;
    }
}