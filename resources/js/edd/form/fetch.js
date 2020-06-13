export default e => {
    
    e.prototype.getUrl = function(name, options = null){
        let urlprefix = this.getAction('url_prefix') ? this.getAction('url_prefix')() : '',
            target_url = this.getAction('url')(`${urlprefix}${name}`, options);
        return target_url;
    }
    
    e.prototype.submit = function(event, vue, type = 'insert', callback = null,){
        let data = new FormData(event.target);
        if(type === 'insert')
            return this.add(vue, data, callback);
        if(type === 'update')
            return this.update(vue, data, callback);
    }
}