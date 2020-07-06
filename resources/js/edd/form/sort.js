export default e => {

    e.prototype.setSort = function(data, vue = null){
        this.option.table.sort = data
        this.setFilter('order', this.option.table.sort.column)
        this.setFilter('asc', this.option.table.sort.asc)
        if(vue)
            this.all(vue)
        return this
    }
}