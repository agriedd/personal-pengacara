
export default (vue, form) => {
    const pengaturan = new window.Form({
        id: null, nama: '', keterangan: '',
    })
    .setCollapse(null, {
        table: true
    })
    .setFilter(null, {
        empty: false
    })
    .pushModal({
        'preview': false,
    })

    .pushAction("find", (context, url, vue)=>{
        return new Promise(async (resolve, reject) => {
            let res = await axios.get(url).catch(e => reject(e)),
                status = context.responseHandler(vue, res.data, e => reject(e));
            if(status) context.getAction('afterFind')(context, res, vue);
            resolve(res);
        });
    })
    .pushAction("afterFind", (context, res, vue)=>{
        if(res.data)
            context.setSelected(res.data);
    })

    return Vue.extend({
        data(){
            return {
                pengaturan: pengaturan
            }
        },
        watch: {
            'pengaturan.option.filter.search': function(val){
                this.lazy(()=>{
                    this.pengaturan.all(this);
                })
            },
            'pengaturan.option.collapse.filter': function(n){
                this.pengaturan.setStore('filter', n, false);
            },
        },
        created(){
            this.pengaturan
                .pushAction('url', (name, option = null) => this.meta(name, option))
                .pushAction('url_prefix', ()=>"pengaturan_")
                .setCollapse(this, {
                    filter: this.pengaturan.getStore('filter', this.pengaturan.getCollapse('filter', false), e => {
                        return e == 'true' ? true : false
                    }, false),
                })
        }
    })
}