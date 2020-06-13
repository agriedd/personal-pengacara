export default e => {

    let path = window.location.pathname;
    let key = `${path}@filter`;

    e.prototype.getFilter = function(only = null){
        let data = {};
        if(only){
            for(let key in only){
                data[key] = this.option.filter[key]
            }
            return data;
        }
        return this.option.filter;
    }
    
    e.prototype.setFilter = function(key, value){
        this.option.filter[key] = value;
        return this;
    }
    e.prototype.pushFilter = function(Vue, data){
        for(let key in data){
            Vue.$set(this.option.filter, key, data[key]);
        }
        this.getStoreFilter();
        return this;
    }
    
    e.prototype.getStoreFilter = function(){
        // let path = window.location.pathname;
        // let key = `${path}@filter`;
        let jsondata = window.localStorage.getItem(key);
        
        if(jsondata != null){
            let data = JSON.parse(jsondata);
            for(let key in data)
                this.option.filter[key] = data[key];
        }

        return this;
    }
    e.prototype.saveFilter = function(vue, callback = null, url = null){
        this.option.filter.page = 1;
        // let path = window.location.pathname;
        let datastore = this.getFilter();
        let jsondatastore = JSON.stringify(datastore);
        // let key = `${path}@filter`;
        window.localStorage.setItem(key, jsondatastore);
        this.all(vue, callback, url);
        return this;
    }

    e.prototype.onSearch = function(){
        return this.option.filter.search.trim().length > 0;
    }
}