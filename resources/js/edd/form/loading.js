export default e => {
    
    e.prototype.fn = async function(promise){
        this.loading = true;

        if(typeof promise === "function") promise = promise(this);

        this.promises.push(promise);

        return new Promise(async(resolve, reject) => {
            let result = await promise.catch((e)=>{
                this.removePromise(promise);
                if(!this.promises.length)
                    this.loading = false;
                reject(e);
            });
            this.removePromise(promise);

            if(!this.promises.length)
                this.loading = false;
            resolve(result);
        });
    }
    e.prototype.removePromise = function(promise){
        let i = this.promises.findIndex((p)=> p === promise);
        this.promises.splice(i, 1);
    }
}