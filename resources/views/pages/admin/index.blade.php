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
        <div class="container-lg">
            <div class="py-2">
                <div class="row mb-3">
                    <div class="col-lg-8 col-md px-0">
                        <div class="row m-0">
                            @include('pages.admin.index.dashboard')
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
                    <div class="col-lg-4 col-md px-0">
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
