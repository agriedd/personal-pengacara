
export default (vue, form) => {
    const bahan_hukum = new window.Form({
        id: null, judul: '', keterangan: '',
        berkas: {
            src: null,
            size: 0,
            created_by: { 
                username: '', email: '',
                info: {
                    nama: '',
                }
            }
        }
    }).setCollapse(null, {
        navHalaman: false,
    })
    .pushModal({
        'preview': false,
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
                bahan_hukum: bahan_hukum
            }
        },
        watch: {
            'bahan_hukum.option.filter.search': function(val){
                this.lazy(()=>{
                    this.bahan_hukum.all(this);
                })
            },
        },
        created(){
            this.bahan_hukum
                .pushAction('url', (name, option = null) => this.meta(name, option))
                .pushAction('url_prefix', ()=>"bahan_hukum_")
            try {
                this.bahan_hukum.all(this)
            } catch (error) {
                //do nothing
            }
        }
    })
}