
export default (vue, form) => {
    const navbar = new window.Form({
    
    }).setCollapse(null, {
        sidebar: false,
        navHalaman: false,
        sidebarInfoAdmin: true,
        dropdownHeaderUser: false,
    })
    return Vue.extend({
        data(){
            return {
                navbar: navbar
            }
        },
    })
}