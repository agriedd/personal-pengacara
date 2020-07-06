export default e => {
    e.prototype.setFile = function(e, key, vue, index = 0){
        let file = e.target.files[index];
        console.log(file);
        vue.$set(this.option.file, key, {
            lastModified: file.lastModified,
            lastModifiedDate: file.lastModifiedDate,
            name: file.name,
            size: file.size,
            type: file.type
        });
    }
    e.prototype.getFile = function(key){
        return this.option.file[key];
    }
    e.prototype.hasFile = function(key){
        return this.option.file[key] == null ? false : true;
    }
    e.prototype.removeFile = function(key, vue = null){
        this.option.file[key] = null;
        if(vue)
            vue.$delete(this.option.file, key);
    }
    e.prototype.resetImage = function(vue = null){
        for(let key in this.option.file)
            this.removeFile(key, vue);
    }
}