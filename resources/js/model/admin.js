
export default (vue, form) => {
    const admin = new window.Form({
        id: null, nama: '', keterangan: '',
        password: '',
        password_baru_confirmation: '',
        password_baru: '',
        info: {
            nama: '',
            email: '',
            info: {
                jenis_kelamin: null,
                tempat_lahir: '',
                tanggal_lahir: '',
                agama: '',
                alamat: null
            }
        }
    })
    .setCollapse(null, {
        table: true
    })
    .setFilter(null, {
        empty: false
    })
    .pushModal({
        'preview': false,
        'password': false,
    })
    .pushAction("list", (context, url, vue)=>{
        return new Promise(async (resolve, reject)=>{
            let res = await axios.get(url, { params: context.getFilter() }).catch(e => {
                reject(e);
            });
            let status = context.responseHandler(vue, res.data, (error)=>reject(error));
            context.setData(vue, res.data);
            resolve(res);
        });
    })

    .pushAction("insert", (context, url, item, vue)=>{
        return new Promise(async (resolve, reject) => {
            let res = await axios.post(url, item).catch(e => {
                reject(e);
            });
            let status = context.responseHandler(vue, res.data, error => reject(error));
            if(status) context.getAction('afterInsert')(context, res, vue);
            resolve(res);
        });
    })
    .pushAction("afterInsert", (context, res, vue)=>{
        context.resetForm(vue);
        context.closeModal('tambah');
        vue.success("Data berhasil ditambahkan 😎");
        context.all(vue);
    })

    .pushAction("remove", (context, url, item, vue)=>{
        return new Promise(async (resolve, reject) => {
            let res = await axios.post(url, {...item, _method: "DELETE"}).catch(e => {
                reject(e);
            });
            let status = context.responseHandler(vue, res.data, (error)=>reject(error));

            if(status){
                let afterRemove = context.getAction('afterRemove');
                if(afterRemove) afterRemove(context, res, vue);
            }
            resolve(res);
        });
    })
    .pushAction("afterRemove", (context, res, vue)=>{
        context.closeModal('hapus');
        vue.success(res.data.message || 'Berhasil menghapus data 🔥');
        context.all(vue);
    })

    .pushAction("update", (context, url, item, vue)=>{
        return new Promise(async (resolve, reject) => {
            let res = await axios.post(url, item).catch(e => {
                reject(e);
            });
            let status = context.responseHandler(vue, res.data, err => reject(err));
            if(status) context.getAction('afterUpdate')(context, res, vue);
            resolve(res);
        })
    })
    .pushAction("afterUpdate", (context, res, vue)=>{
        context.resetForm(vue);
        context.closeModal('ubah');
        vue.success("Data berhasil disimpan 😎");
        context.all(vue);
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
                admin: admin
            }
        },
        watch: {
            'admin.option.filter.search': function(val){
                this.lazy(()=>{
                    this.admin.all(this);
                })
            },
            'admin.option.collapse.filter': function(n){
                this.admin.setStore('filter', n, false);
            },
        },
        created(){
            this.admin
                .pushAction('url', (name, option = null) => this.meta(name, option))
                .pushAction('url_prefix', ()=>"admin_")
                .setCollapse(this, {
                    filter: this.admin.getStore('filter', this.admin.getCollapse('filter', false), e => {
                        return e == 'true' ? true : false
                    }, false),
                })
        }
    })
}