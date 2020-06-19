export default e => {
    
    e.prototype.getModal = function(key){
        return this.option.modal[key]
    }
    e.prototype.pushModal = function(data, Vue = null){
        if(Vue)
            for(let key in data){
                Vue.$set(this.option.modal, key, data[key]);
            }
        else
            this.option.modal = {...this.option.modal, ...data }
        return this;
    }
    e.prototype.closeModal = function(key, reset = true, callback = null){
        return new Promise(async (resolve, reject)=>{
            
            let beforeCloseModal = this.getAction('beforeCloseModal');
            if(beforeCloseModal) afterCloseModal(key);

            this.option.modal[key] = false;
            if(reset) this.resetForm();
            if(callback) await callback();
            resolve(this);
            
            let afterCloseModal = this.getAction('afterCloseModal');
            if(afterCloseModal) afterCloseModal(key);
        });
    }
    e.prototype.openModal = function(key, selected = null, callback = null){
        return new Promise(async (resolve, reject)=>{
            
            let beforeOpenModal = this.getAction('beforeOpenModal');
            if(beforeOpenModal) beforeOpenModal(key);

            this.option.modal[key] = true;
            if(selected) this.setSelected(selected);
            if(callback) await callback();
            resolve(this);
            
            let afterOpenModal = this.getAction('afterOpenModal');
            if(afterOpenModal) afterOpenModal(key);
        });
    }
}