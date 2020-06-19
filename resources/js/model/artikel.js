
export default (vue, form) => {
    const artikel = new window.Form({
        title: '', body: '', cover: null
    }).setCollapse(null, {
        navHalaman: false,
    })
    .pushModal({
        'preview': false,
    })
    .pushAction("list", (context, url, vue)=>{
        return new Promise(async (resolve, reject)=>{
            let res = await axios.get(url, context.getFilter()).catch(e => {
                reject(e);
            });
            let status = context.responseHandler(vue, res.data, (error)=>reject(error));
            context.setData(vue, res.data);
            resolve(res);
        });
    })
    return Vue.extend({
        data(){
            return {
                artikel: artikel
            }
        },
        created(){
            console.log(this.artikel);
            this.artikel
                .pushAction('url', (name, option = null) => this.meta(name, option))
                .pushAction('url_prefix', ()=>"artikel_")
                .all(this)
        }
    })
}