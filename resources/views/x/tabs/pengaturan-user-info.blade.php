<div class="d-flex h-100">
    <div>
        <div class="nav d-flex flex-column">
            @include('x.tabs.pengaturan-user-mini')
        </div>
    </div>
    <div>
        <div class="border-right h-100"></div>
    </div>
    <div style="flex: 1 1 auto">
        <transition name="fly-down" mode="out-in">
            <div :key="user.tab()">
                <div v-if="user.isTab('info')">
                    <div class="card-body">
                        <div class="d-flex justify-content-center">
                            <div class="img-lg shadow bg-gray-light overflow-hidden" style="border-radius: 1rem" v-src="admin.getSelected('info').foto">
                                <div class="content text-light">
                                    <div class="d-flex w-100 justify-middle">
                                        <button class="btn btn-lg btn-link text-light shadow-none" v-on:click="user.openModal('ubah')">
                                            <svg width="3em" height="3em" viewBox="0 0 16 16" class="bi bi-image" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                                <path fill-rule="evenodd" d="M14.002 2h-12a1 1 0 0 0-1 1v10a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V3a1 1 0 0 0-1-1zm-12-1a2 2 0 0 0-2 2v10a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V3a2 2 0 0 0-2-2h-12z"/>
                                                <path d="M10.648 7.646a.5.5 0 0 1 .577-.093L15.002 9.5V14h-14v-2l2.646-2.354a.5.5 0 0 1 .63-.062l2.66 1.773 3.71-3.71z"/>
                                                <path fill-rule="evenodd" d="M4.502 7a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3z"/>
                                            </svg>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="d-flex pt-5">
                            <div class="px-3">
                                <div class="justify-middle">
                                    <svg class="bi bi-person-fill" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
                                    </svg>
                                </div>
                            </div>
                            <div v-if="admin.getSelected('info') && admin.getSelected('info').info">
                                <div class="h5 font-weight-light p-2">
                                    @{{ admin.getSelected('info').nama }}
                                </div>
                                <div class="small p-2">
                                    @{{ admin.getSelected('email') }}
                                </div>
                                <div class="small p-2">
                                    @{{ admin.getSelected('info').info.jenis_kelamin }}
                                </div>
                                <div class="small p-2">
                                    @{{ admin.getSelected('info').info.tempat_lahir }},
                                    @{{ admin.getSelected('info').info.tanggal_lahir }}
                                </div>
                                <div class="small p-2">
                                    @{{ admin.getSelected('info').info.agama }}
                                </div>
                                <div class="small p-2">
                                    @{{ admin.getSelected('info').info.alamat }}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div v-else>
                    <div class="card-body">
                        <div class="d-flex pt-5 pb-3">
                            <div class="px-3">
                                <div class="justify-middle">
                                    <svg width="2em" height="2em" viewBox="0 0 16 16" class="bi bi-shield-lock" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" d="M5.443 1.991a60.17 60.17 0 0 0-2.725.802.454.454 0 0 0-.315.366C1.87 7.056 3.1 9.9 4.567 11.773c.736.94 1.533 1.636 2.197 2.093.333.228.626.394.857.5.116.053.21.089.282.11A.73.73 0 0 0 8 14.5c.007-.001.038-.005.097-.023.072-.022.166-.058.282-.111.23-.106.525-.272.857-.5a10.197 10.197 0 0 0 2.197-2.093C12.9 9.9 14.13 7.056 13.597 3.159a.454.454 0 0 0-.315-.366c-.626-.2-1.682-.526-2.725-.802C9.491 1.71 8.51 1.5 8 1.5c-.51 0-1.49.21-2.557.491zm-.256-.966C6.23.749 7.337.5 8 .5c.662 0 1.77.249 2.813.525a61.09 61.09 0 0 1 2.772.815c.528.168.926.623 1.003 1.184.573 4.197-.756 7.307-2.367 9.365a11.191 11.191 0 0 1-2.418 2.3 6.942 6.942 0 0 1-1.007.586c-.27.124-.558.225-.796.225s-.526-.101-.796-.225a6.908 6.908 0 0 1-1.007-.586 11.192 11.192 0 0 1-2.417-2.3C2.167 10.331.839 7.221 1.412 3.024A1.454 1.454 0 0 1 2.415 1.84a61.11 61.11 0 0 1 2.772-.815z"/>
                                        <path d="M9.5 6.5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0z"/>
                                        <path d="M7.411 8.034a.5.5 0 0 1 .493-.417h.156a.5.5 0 0 1 .492.414l.347 2a.5.5 0 0 1-.493.585h-.835a.5.5 0 0 1-.493-.582l.333-2z"/>
                                    </svg>
                                </div>
                            </div>
                            <div>
                                <div class="small" v-tooltip="'username'">
                                    @@{{ admin.getSelected('username') }}
                                </div>
                                <div class="small" v-tooltip="'email'">
                                    @{{ admin.getSelected('email') }}
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 pt-2 px-0">
                            @component('x.tip.default')
                                @slot('tip', 'bg-dark tip-center-top text-dark')
                                @slot('card', 'text-light')
                                <div class="small">
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Neque enim, ab nihil earum laboriosam amet officia rem consectetur voluptates ad adipisci? Reprehenderit, rem ducimus ipsum soluta quia harum ea pariatur.
                                </div>
                            @endcomponent
                            @component('x.tip.default')
                                @slot('tip', 'bg-warning tip-right-top text-warning')
                                @slot('card', 'text-light')
                                <div class="small d-flex justify-content-end">
                                    <button class="btn btn-sm btn-dark px-3 shadow">
                                        <div class="d-flex">
                                            <div class="pr-3">
                                                <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-pencil" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                                    <path fill-rule="evenodd" d="M11.293 1.293a1 1 0 0 1 1.414 0l2 2a1 1 0 0 1 0 1.414l-9 9a1 1 0 0 1-.39.242l-3 1a1 1 0 0 1-1.266-1.265l1-3a1 1 0 0 1 .242-.391l9-9zM12 2l2 2-9 9-3 1 1-3 9-9z"/>
                                                    <path fill-rule="evenodd" d="M12.146 6.354l-2.5-2.5.708-.708 2.5 2.5-.707.708zM3 10v.5a.5.5 0 0 0 .5.5H4v.5a.5.5 0 0 0 .5.5H5v.5a.5.5 0 0 0 .5.5H6v-1.5a.5.5 0 0 0-.5-.5H5v-.5a.5.5 0 0 0-.5-.5H3z"/>
                                                </svg>
                                            </div>
                                            <div>
                                                Ubah Sandi
                                            </div>
                                        </div>
                                    </button>
                                </div>
                            @endcomponent
                        </div>
                    </div>
                </div>
            </div>
        </transition>
    </div>
</div>