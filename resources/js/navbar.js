
export default (vue, form) => {
    const navbar = new window.Form({
    
    }).setCollapse(null, {
        sidebar: false,
        navHalaman: false,
        sidebarInfoAdmin: true,
        dropdownHeaderUser: false,
        menuHome: false,
    })
    return Vue.extend({
        data(){
            return {
                navbar: navbar
            }
        },
        watch: {
            'navbar.option.collapse.sidebar': function(n){
                this.navbar.setStore('sidebar', n, false);
            },
        },
        created(){
            this.navbar.setCollapse(this, {
                sidebar: this.navbar.getStore('sidebar', this.navbar.getCollapse('sidebar'), e => {
                    return e == 'true' ? true : false
                }, false)
            })
        }
    })
}