export default {
    meta(name, replace){
        try {
            var v = document.querySelector(`meta[name="${name}"`).content;
            if(replace){
                for(let e in replace){
                    let r = new RegExp(`${e}`, "ig");
                    v = v.replace(r, replace[ e ]);
                }
            }
            return v;
        } catch(e) {
            console.log('Error', name, e);
        }
    },
    lazy: function(callback, time = null){
        if(this.timeout)
            clearTimeout(this.timeout);
        this.timeout = setTimeout(()=>{
            this.timeout = null;
            callback();
        }, time ? time : 800);
    },
    getContext(){
        return this;
    },
    success(message){
        this.$notification.add({ label: "Sukses!", description: message, icon: 'fa-check', className: 'bg-success', time: this.time, action: (notif)=>{
            notif.remove();
        } })
    },
    warning(message){
        this.$notification.add({ label: "Pemberitahuan!", description: message, icon: 'fa-warning', className: 'bg-warning', time: this.time, action: (notif)=>{
            notif.remove();
        } })
    },
    danger(message){
        this.$notification.add({ label: "Gagal!", description: message, icon: 'fa-times', className: 'text-danger bg-dark', time: this.time, action: (notif)=>{
            notif.remove();
        } })
    },
}