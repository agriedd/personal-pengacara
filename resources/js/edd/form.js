import init from './form/main'

const Form = class {
    constructor(data, option = {
        filter: { search: '', page: 1, limit: 10 },
        table: {pagination: {}, sort: { column: 'id', asc: true }},
        data: [],
        selected: null,
        modal: { tambah: false, ubah: false, update: false, hapus: false, info: false },
        tab: null,
        image: {},
        form: {},
        collapse: {},
        list: {},
    }){
        this.option = option
        this.data = {}
        this.action = {}
        
        this.promises = [];
        this.loading = false;

        this.setError();
        this.getStoreFilter();

        if(typeof data !== "object") return
        this.data = {...data};
        this.original = data;
    }

}

init(Form)

export default Form