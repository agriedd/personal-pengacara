export default e => {
    e.prototype.all = function(vue, callback = null, url = null){
        let action = this.getAction('list');

        if(callback) action = callback;
        if(action == null)
            throw new Error("😕 Sepertinya aksi LIST belum di atur");

        let target_url = this.getUrl('all') || url;

        if(target_url == null)
            throw new Error("😕 Sepertinya aksi URL belum di atur");
        
        return this.fn((context)=>{
            return new Promise( async (resolve, reject) => {
                let result = await action(this, target_url, vue).catch(e => {
                    this.errorHandling(vue, e);
                    reject(e);
                });
                resolve(result);
            });
        });
    }
}