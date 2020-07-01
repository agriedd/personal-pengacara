<div class="h-100">
    <div class="p-2 h-100">
        @component('x.tip.default')
            @slot('tip', 'bg-dark text-dark tip-right-bottom h-100')
            @slot('card', 'p-2')
            <div class="position-sticky px-0 mx-auto py-3" style="top: 70px; max-width: 300px">
                <div class="list-group shadow-sm border-0 w-100">
                    <div class="list-group-item border-bottom-0">
                        <div class="d-flex justify-content-between">
                            <div>
                                <div class="justify-middle">
                                    <div class="small text-muted">
                                        Jumlah data /halaman
                                    </div>
                                </div>
                            </div>
                            <div class="text-dark">
                                <svg class="bi bi-file-break" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" d="M0 10.5a.5.5 0 0 1 .5-.5h15a.5.5 0 0 1 0 1H.5a.5.5 0 0 1-.5-.5z"/>
                                    <path d="M12 1H4a2 2 0 0 0-2 2v6h1V3a1 1 0 0 1 1-1h8a1 1 0 0 1 1 1v6h1V3a2 2 0 0 0-2-2zm2 11h-1v1a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1v-1H2v1a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2v-1z"/>
                                </svg>
                            </div>
                        </div>
                    </div>
                    <div class="list-group-item">
                        <div class="d-flex flex-row justify-content-between text-gray-light">
                            <div class="d-flex" v-for="i in 5">
                                <div class="small" :class="{'font-weight-bold text-blue': {{ $model }}.option.filter.limit == ((i-1)*10)+10}" @click="{{ $model }}.option.filter.limit = ((i-1)*10)+10" style="cursor: pointer">
                                    @{{ ((i-1)*10)+10 }}
                                </div>
                            </div>
                        </div>
                        <div class="small">
                            <input type="range" class="form-control-range" step="10" min="10" max="50" v-model="{{ $model }}.option.filter.limit" v-on:input="filter('{{ $model }}', 'limit', $event)">
                        </div>
                    </div>
                </div>
            </div>
        @endcomponent
    </div>
</div>