export default e => {
    
    e.prototype.errorHandling = function(vue, exception){
        vue.danger(exception);
        console.log('Error => ', exception);
        return this;
    }

    e.prototype.responseHandler = function(vue, res, callback = null){

        let error = typeof res !== "object" || (res.status != null && !res.status) || res.error || Object.keys(res).length < 1;
        
        /**
         * error jika validasi gagal
         * 
         * 1. jika respon memilik key status dan bernilai false
         * 2. atau jika respon memilik key error dan bernilai true
         * 3. dan memiliki key data dan bertype object
         * 
         */
        let validate_error = typeof res === "object" && ((res.status != null && !res.status) || (res.error != null && res.error)) && (res.data != null && typeof res.data == "object");

        /**
         * debug development
         * 1. jika respon memiliki key debug dan bernilai true
         * 
         */
        let debug = typeof res === "object" && res.debug != null && res.debug;

        if(debug)
            return vue.debug(res.data || "Empty Data");

        if(validate_error)
            this.error.setError(res.data, vue);
        
        if(callback && error)
            callback(res.pesan || res.message || res);
        if(callback)
            return !error;

        if(error)
            throw new Error(typeof res === "object" ? res.pesan || res.message || res : "Terjadi sebuah kesalahan ⚠");
    }
}