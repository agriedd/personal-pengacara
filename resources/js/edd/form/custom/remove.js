export default e => {
    e.prototype.remove = function(vue, index = null, callback = null, url = null){
        
        let item = this.getSelected(),
            action = this.getAction('remove');
            
        if(index != null) item = this.getData(index);
        if(callback) action = callback;

        
        if(action == null)
            throw new Error("😕 Sepertinya aksi REMOVE belum di atur");
        
        let urlprefix = this.getAction('url_prefix') ? this.getAction('url_prefix')() : '',
            target_url = this.getAction('url')(`${urlprefix}delete`, { '#id': item.id });
        
        if(url) target_url = url;

        if(target_url == null)
            throw new Error("😕 Sepertinya aksi URL belum di atur");
        
        return new Promise(async (resolve, reject) => {
            let result = await action(this, target_url, item, vue).catch(e => {
                this.errorHandling(vue, e);
                reject(e);
            });
            resolve(result);
        });
    }
}