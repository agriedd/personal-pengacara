<div class="row">
    <div class="col-lg-9 col-md-8">
        <div class="pt-3">
            <div class="d-flex justify-content-end">
                <div class="d-flex flex-column" v-cloak>
                    <div>
                        <div class="alert small text-muted text-right">
                            Suka dengan artikel ini?
                        </div>
                    </div>
                    <div v-if="!disabled">
                        @component('x.tip.default')
                            @slot('tip', 'bg-primary text-primary tip-right-top')
                            @slot('card', 'text-light')
                            <div>
                                <div class="flex justify-content-center">
                                    <a href="javascript:void(0)" class="btn btn-link text-light text-decoration-none" @click.prevent="toggleRipple('suka')">
                                        <v-ripple v-bind:state="getRipple('suka')" animate="animated bounceIn" color="#dc3545" class="d-flex">
                                            <div>
                                                Suka
                                            </div>
                                        </v-ripple>
                                    </a>
                                    <a href="javascript:void(0)" class="btn btn-link text-light text-decoration-none" @click.prevent="like(null, false)">
                                        Tidak Suka
                                    </a>
                                </div>
                            </div>
                        @endcomponent
                    </div>
                    <div v-else>
                        <div v-if="vote">
                            @component('x.tip.default')
                                @slot('tip', 'bg-gray-light text-gray-light tip-right-top')
                                @slot('card', 'text-dark')
                                <div>
                                    <div class="d-flex">
                                        <div class="text-danger">
                                            <svg class="bi bi-heart-fill" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                                <path fill-rule="evenodd" d="M8 1.314C12.438-3.248 23.534 4.735 8 15-7.534 4.736 3.562-3.248 8 1.314z"/>
                                            </svg>
                                        </div>
                                        <div class="pl-3 small">
                                            <div class="justify-middle">
                                                Anda menyukai artikel ini!
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endcomponent
                        </div>
                        <div v-else>
                            @component('x.tip.default')
                                @slot('tip', 'bg-gray-light text-gray-light tip-right-top')
                                @slot('card', 'text-dark')
                                <div>
                                    <div class="d-flex">
                                        <div>
                                            <svg class="bi bi-emoji-frown" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                                <path fill-rule="evenodd" d="M8 15A7 7 0 1 0 8 1a7 7 0 0 0 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
                                                <path fill-rule="evenodd" d="M4.285 12.433a.5.5 0 0 0 .683-.183A3.498 3.498 0 0 1 8 10.5c1.295 0 2.426.703 3.032 1.75a.5.5 0 0 0 .866-.5A4.498 4.498 0 0 0 8 9.5a4.5 4.5 0 0 0-3.898 2.25.5.5 0 0 0 .183.683z"/>
                                                <path d="M7 6.5C7 7.328 6.552 8 6 8s-1-.672-1-1.5S5.448 5 6 5s1 .672 1 1.5zm4 0c0 .828-.448 1.5-1 1.5s-1-.672-1-1.5S9.448 5 10 5s1 .672 1 1.5z"/>
                                            </svg>
                                        </div>
                                        <div class="pl-3 small">
                                            <div class="justify-middle">
                                                Anda tidak tertarik dengan artikel ini...
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endcomponent
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>