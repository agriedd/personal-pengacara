export default e => {
    e.prototype.setImage = function(e, key, vue){
        let reader = new FileReader();
        let image = e.target.files[0];
        let imagetype = /image.*/;
        if(!image.type.match(imagetype))
            vue.warning('Tipe gambar tidak didukung 😢');
        reader.onload = e =>{
            this.setImageData(vue, key, reader.result);
        }
        reader.readAsDataURL(image);
    }
    e.prototype.getImage = function(key){
        return this.option.image[key];
    }
    e.prototype.removeImage = function(key, vue = null){
        this.option.image[key] = null;
        this.data.foto = null;
        if(vue)
            vue.$delete(this.option.image, key);
    }
    e.prototype.resetImage = function(vue = null){
        for(let key in this.option.image)
            this.removeImage(key, vue);
    }
    e.prototype.setImageData = function(vue, key, base64){
        vue.$set(this.option.image, key, base64);
    }
}