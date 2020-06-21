export default e => {
    e.prototype.find = function(vue, callback = null, url = null, idStatus = true){

        let action = this.getAction('find');

        if(callback) action = callback;
        if(action == null)
            throw new Error("😕 Sepertinya aksi FIND belum di atur");

        let urlprefix = this.getAction('url_prefix') ? this.getAction('url_prefix')() : '';
        let id = "";
        if(idStatus)
            id = this.getAction('url')( `${urlprefix}id` );
        let target_url = this.getUrl('find', {'#id': id});
        
        if(url) target_url = url;
        
        if(target_url == null)
            throw new Error("😕 Sepertinya aksi URL belum di atur");
        
        return new Promise( async (resolve, reject) => {
            let result = await action(this, target_url, vue).catch(e => {
                this.errorHandling(vue, e);
                reject(e);
            });
            resolve(result);
        });
    }
}