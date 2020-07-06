{{-- Halaman Panel Admin 🔥 --}}

@extends('layouts.admin', [ 'appjs' => 'admin-index.js' ])

@section('sidebar')
    @include('x.sidebars.admin')
@endsection

@section('content')
    @component('x.headers.admin')
        Panel Admin
    @endcomponent
@endsection
@push('appendcontent')
    <div class="card border-0 my-2 bg-dark text-light">
        <div class="container">
            <div class="py-2">
                <div class="row mb-3">
                    <div class="col-lg-8 col-md">
                        <div class="row m-0">
                            <div class="col-lg-4 col-6 p-1">
                                @component('x.tip.default')
                                    @slot('tip', 'bg-gray-dark h-100')
                                    @slot('card', 'text-white')
                                    <div class="d-flex rounded py-2">
                                        <div class="small text-success">
                                            <div class="justify-middle">
                                                Total Artikel
                                            </div>
                                        </div>
                                        <div class="pl-3">
                                            <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-newspaper" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                                <path fill-rule="evenodd" d="M0 2A1.5 1.5 0 0 1 1.5.5h11A1.5 1.5 0 0 1 14 2v12a1.5 1.5 0 0 1-1.5 1.5h-11A1.5 1.5 0 0 1 0 14V2zm1.5-.5A.5.5 0 0 0 1 2v12a.5.5 0 0 0 .5.5h11a.5.5 0 0 0 .5-.5V2a.5.5 0 0 0-.5-.5h-11z"/>
                                                <path fill-rule="evenodd" d="M15.5 3a.5.5 0 0 1 .5.5V14a1.5 1.5 0 0 1-1.5 1.5h-3v-1h3a.5.5 0 0 0 .5-.5V3.5a.5.5 0 0 1 .5-.5z"/>
                                                <path d="M2 3h10v2H2V3zm0 3h4v3H2V6zm0 4h4v1H2v-1zm0 2h4v1H2v-1zm5-6h2v1H7V6zm3 0h2v1h-2V6zM7 8h2v1H7V8zm3 0h2v1h-2V8zm-3 2h2v1H7v-1zm3 0h2v1h-2v-1zm-3 2h2v1H7v-1zm3 0h2v1h-2v-1z"/>
                                            </svg>
                                        </div>
                                    </div>
                                    <div class="d-flex">
                                        <div class="display-4" style="line-height: 1">
                                            {{ $total_artikel }}
                                        </div>
                                        <div class="small text-light pl-2">
                                            <div class="justify-middle justify-content-end">
                                                artikel
                                            </div>
                                        </div>
                                    </div>
                                @endcomponent
                            </div>
                            <div class="col-lg-4 col-6 p-1">
                                @component('x.tip.default')
                                    @slot('tip', 'bg-gray-dark h-100')
                                    @slot('card', 'text-white')
                                    <div class="d-flex rounded py-2">
                                        <div class="small text-info">
                                            <div class="justify-middle">
                                                Total Galeri
                                            </div>
                                        </div>
                                        <div class="pl-3">
                                            <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-images" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                                <path fill-rule="evenodd" d="M12.002 4h-10a1 1 0 0 0-1 1v8a1 1 0 0 0 1 1h10a1 1 0 0 0 1-1V5a1 1 0 0 0-1-1zm-10-1a2 2 0 0 0-2 2v8a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V5a2 2 0 0 0-2-2h-10z"/>
                                                <path d="M10.648 8.646a.5.5 0 0 1 .577-.093l1.777 1.947V14h-12v-1l2.646-2.354a.5.5 0 0 1 .63-.062l2.66 1.773 3.71-3.71z"/>
                                                <path fill-rule="evenodd" d="M4.502 9a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3zM4 2h10a1 1 0 0 1 1 1v8a1 1 0 0 1-1 1v1a2 2 0 0 0 2-2V3a2 2 0 0 0-2-2H4a2 2 0 0 0-2 2h1a1 1 0 0 1 1-1z"/>
                                            </svg>
                                        </div>
                                    </div>
                                    <div class="d-flex">
                                        <div class="display-4" style="line-height: 1">
                                            {{ $total_galeri }}
                                        </div>
                                        <div class="small text-light pl-2">
                                            <div class="justify-middle justify-content-end">
                                                galeri
                                            </div>
                                        </div>
                                    </div>
                                @endcomponent
                            </div>
                            <div class="col-lg-4 col-12 p-1">
                                @component('x.tip.default')
                                    @slot('tip', 'bg-gray-dark h-100')
                                    @slot('card', 'text-white')
                                    <div class="d-flex rounded py-2">
                                        <div class="small text-warning">
                                            <div class="justify-middle">
                                                Total Berkas
                                            </div>
                                        </div>
                                        <div class="pl-3">
                                            <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-file-earmark-arrow-up" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M4 1h5v1H4a1 1 0 0 0-1 1v10a1 1 0 0 0 1 1h8a1 1 0 0 0 1-1V6h1v7a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2z"/>
                                                <path d="M9 4.5V1l5 5h-3.5A1.5 1.5 0 0 1 9 4.5z"/>
                                                <path fill-rule="evenodd" d="M5.646 8.854a.5.5 0 0 0 .708 0L8 7.207l1.646 1.647a.5.5 0 0 0 .708-.708l-2-2a.5.5 0 0 0-.708 0l-2 2a.5.5 0 0 0 0 .708z"/>
                                                <path fill-rule="evenodd" d="M8 12a.5.5 0 0 0 .5-.5v-4a.5.5 0 0 0-1 0v4a.5.5 0 0 0 .5.5z"/>
                                            </svg>
                                        </div>
                                    </div>
                                    <div class="d-flex">
                                        <div class="display-4" style="line-height: 1">
                                            {{ $total_berkas }}
                                        </div>
                                        <div class="small text-light pl-2">
                                            <div class="justify-middle justify-content-end">
                                                berkas
                                            </div>
                                        </div>
                                    </div>
                                @endcomponent
                            </div>
                        </div>
                        <div class="card clean my-2 bg-white text-dark">
                            <div class="container">
                                <div>
                                    <div class="d-flex py-2">
                                        <div class="display-4" style="line-height: 1">
                                            {{ $total_kunjungan }}
                                        </div>
                                        <div class="pl-1">
                                            <div class="small justify-middle justify-content-end">
                                                kunjungan
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6 px-0">
                                        <div class="small card-body">
                                            <div>
                                                <v-chart :options="options" type="line" :series="series"></v-chart>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 px-0">
                                        <div class="p-3 h-100">
                                            <div class="card bg-primary border-0 h-100 shadow">
                                                <div class="card-body text-white">
                                                    <div class="text-white small py-2">
                                                        Total kunjungan bulan ini
                                                    </div>
                                                    <div class="d-flex">
                                                        <div class="display-4" style="line-height: 1">
                                                            {{ $total_kunjungan_bulan_ini }}
                                                        </div>
                                                        <div class="pl-1 small">
                                                            <div class="justify-content-end justify-middle">
                                                                kunjungan
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <hr class="row divider">
                                                    <div class="text-white small py-2">
                                                        {{ $perbandingan_bulan_lalu > 0 ? "+" : null }}{{ $perbandingan_bulan_lalu }} kunjungan
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md">
                        <div class="d-flex flex-column p-1 rounded">
                            <div class="card-body">
                                <div class="text-gray-light font-weight-bold">
                                    Artikel Terakhir
                                </div>
                            </div>
                            @foreach ($artikel as $item)
                            <div class="p-1">
                                <div class="card text-light bg-gray-dark shadow rounded-lg border-0">
                                    <div class="card-body">
                                        <div class="d-flex">
                                            <div class="text-light pr-3">
                                                @if($item->rating > 0)
                                                <div class="text-success">
                                                    <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-arrow-up" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                                        <path fill-rule="evenodd" d="M8 3.5a.5.5 0 0 1 .5.5v9a.5.5 0 0 1-1 0V4a.5.5 0 0 1 .5-.5z"/>
                                                        <path fill-rule="evenodd" d="M7.646 2.646a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1-.708.708L8 3.707 5.354 6.354a.5.5 0 1 1-.708-.708l3-3z"/>
                                                    </svg>
                                                </div>
                                                @else
                                                <div class="text-danger">
                                                    <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-arrow-down" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                                        <path fill-rule="evenodd" d="M4.646 9.646a.5.5 0 0 1 .708 0L8 12.293l2.646-2.647a.5.5 0 0 1 .708.708l-3 3a.5.5 0 0 1-.708 0l-3-3a.5.5 0 0 1 0-.708z"/>
                                                        <path fill-rule="evenodd" d="M8 2.5a.5.5 0 0 1 .5.5v9a.5.5 0 0 1-1 0V3a.5.5 0 0 1 .5-.5z"/>
                                                    </svg>
                                                </div>
                                                @endif
                                            </div>
                                            <div class="pr-3">
                                                <div class="img-sm bg-gray rounded" style="background-image: url('{{ $item->cover->src_sm }}') ">
                                                </div>
                                            </div>
                                            <div>
                                                <div class="small text-gray-light mb-2">
                                                    <span class="" v-tooltip.top.start="{ content: '{{ $item->created_at }}', offset: 8 }">
                                                        {{ $item->created_at->diffForHumans() }}
                                                    </span>
                                                </div>
                                                <a href="{{ $item->info_url_admin }}">
                                                    <h5 class="mb-1 text-white">
                                                        {{ $item->info->title }}
                                                    </h5>
                                                </a>
                                                <div class="small">
                                                    {{ $item->info->description }}...
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endpush

@push('meta')
    <meta name="kunjungan_report" content="{{ route('kunjungan.report') }}">
@endpush

@push('script')
    <script src="{{ asset('/js/eddlibrary.umd.min.js') }}" defer></script>
@endpush
@push('footer')
    <script>
        window.addEventListener('load', ()=>{
            Vue.use(eddlibrary.Notification);
            Vue.use(vTooltip);
            window.app = new Vue({
                el: "#app",
                mixins: [window.Mixins.Init, window.Mixins.Navbar, window.Mixins.Kunjungan],
                components: { 'modal': eddlibrary.Modal, 'notification': eddlibrary.Notification },
                data: {
                    time: 5000,
                    options: {
                        chart: {
                            id: 'chart1',
                            toolbar: {
                                autoSelected: "pan",
                                show: false
                            },
                        },
                        grid: {
                            borderColor: "#555",
                            clipMarkers: false,
                            yaxis: {
                                lines: {
                                    show: false
                                }
                            }
                        },
                        dataLabels: {
                            enabled: false
                        },
                        xaxis: {
                            categories: []
                        },
                        stroke: {
                            curve: 'smooth'
                        },
                        fill: {
                            type: 'gradient',
                            gradient: {
                                shade: 'dark',
                                gradientToColors: [ '#FFF', '#FFF'],
                                shadeIntensity: 1,
                                type: 'horizontal',
                                opacityFrom: 1,
                                opacityTo: 1,
                                stops: [0, 25, 100, 100]
                            },
                        },
                    },
                    series: [{
                        name: 'series-1',
                        data: [30, 40, 45, 50, 49, 60, 70, 91]
                    }]
                },
                methods: {
                    submit(type, e, form = 'insert'){},
                    removeImage(type, name){},
                    konfirmasiHapus(type, index){},
                    update(type, index){},
                    insert(type, index){},
                    filter(type, name){
                    },
                    page(type, name, data){
                    },
                    sort(type, name, data){
                    },
                    laporanKunjungan(){
                        this.kunjungan.all(this, (context, url, vue)=>{
                            return new Promise(async(resolve, reject)=>{
                                let res = await axios.get(url, {
                                    params: this.kunjungan.getFilter()
                                }).catch(e => reject(e));
                                let status = context.responseHandler(vue, res.data, (error)=>reject(error));
                                this.series.pop();
                                this.series.push({
                                    name: 'kunjungan',
                                    data: res.data.values
                                });
                                ApexCharts.exec(this.options.chart.id, 'updateOptions', {
                                    xaxis: {
                                        categories: res.data.dates,
                                    }
                                });
                                resolve(res);
                            });
                        }, this.meta('kunjungan_report'));
                    }
                },
                created(){
                    this.laporanKunjungan();
                }
            });
        });
    </script>
@endpush
