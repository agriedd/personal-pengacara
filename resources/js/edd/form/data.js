export default e => {
    e.prototype.setData = function(vue, res, pagination = true){
        this.responseHandler(vue, res);
        if(res.data && Array.isArray(res.data))
            this.option.data = res.data;
        if(pagination)
            this.setPagination(vue, res);
        return this;
    }
    
    e.prototype.getData = function(index = null){
        if(index != null) return this.option.data[index];
        return this.option.data;
    }
    
    e.prototype.notEmpty = function(){
        return Array.isArray(this.option.data) && this.option.data.length > 0; 
    }
    
    e.prototype.setPagination = function(vue, data){
        let paginationlist = ['total', 'current_page', 'last_page'];
        paginationlist.forEach((element, index)=>{
            vue.$set(this.option.table.pagination, element, data[element]);
        });
        if(this.option.filter.page > this.option.table.pagination.last_page && this.option.filter.page > 1){
            this.all(vue);
            this.option.filter.page = this.option.table.pagination.last_page;
        }
        return this;
    }
    
    e.prototype.setHeader = function(headers){
        this.option.table.header = headers;
        return this;
    }
    
    e.prototype.getHeader = function(){
        return this.option.table.header;
    }
}