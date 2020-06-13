export default e => {
    e.prototype.update = function(vue, data = null, callback = null){
        let item = this.data,
            action = this.getAction('update');
        
        if(data) item = data;
        if(callback) action = callback;

        if(action == null)
            throw new Error("😕 Sepertinya aksi UPDATE belum di atur");
        let urlprefix = this.getAction('url_prefix') ? this.getAction('url_prefix')() : '',
            target_url = this.getAction('url')(`${urlprefix}update`, { '{id}': this.data.id });

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