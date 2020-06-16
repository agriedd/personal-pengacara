
export default (vue, form) => {
    const navbar = new window.Form({
    
    }).setCollapse(null, {
        sidebar: false,
        navHalaman: false,
    })
    return Vue.extend({
        data(){
            return {
                navbar: navbar
            }
        },
    })
}