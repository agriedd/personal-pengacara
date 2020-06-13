export default e => {
    e.prototype.add = function(vue, data = null, callback = null, url = null){
        let item = this.data,
            action = this.getAction('insert');
        
        if(data) item = data;
        if(callback) action = callback;

        if(action == null)
            throw new Error("😕 Sepertinya aksi INSERT belum di atur");
        
        let urlprefix = this.getAction('url_prefix') ? this.getAction('url_prefix')() : '',
            target_url = this.getAction('url')(`${urlprefix}insert`);
        
        if(url) target_url = url;
        
        if(target_url == null)
            throw new Error("😕 Sepertinya aksi URL belum di atur");
        
        this.error.clear();

        return this.fn(new Promise(async (resolve, reject) => {
            let result = await action(this, target_url, item, vue).catch(e => {
                this.errorHandling(vue, e);
                reject(e);
            });
            resolve(result);
        }));
    }
}