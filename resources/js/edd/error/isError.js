export default Error => {
    Error.prototype.isError = function(){
        let status = [];
        if(Object.keys(this.data).length)
            for(let key in this.data)
                if(this.data[key].length)
                    status.push(false);
        if(status.length)
            return !status.reduce((t, e)=>{
                return t && e;
            });
        return false;
    }
}