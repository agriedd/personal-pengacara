
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
            'navbar.option.collapse.sidebarInfoAdmin': function(n){
                this.navbar.setStore('sidebarInfoAdmin', n, false);
            },
        },
        created(){
            this.navbar.setCollapse(this, {
                sidebar: this.navbar.getStore('sidebar', this.navbar.getCollapse('sidebar'), e => {
                    return e == 'true' ? true : false
                }, false),
                sidebarInfoAdmin: this.navbar.getStore('sidebarInfoAdmin', this.navbar.getCollapse('sidebarInfoAdmin'), e => {
                    return e == 'true' ? true : false
                }, false),
            })
        }
    })
}