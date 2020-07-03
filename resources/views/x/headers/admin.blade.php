<div class="navbar navbar-light px-0">
    <div class="container-lg">
        <div class="navbar p-0 w-100">
            <div class="d-flex">
                <div class="pr-3">
                    <button class="btn-link btn d-none d-sm-block text-dark shadow-none" type="button" @click.prevent="navbar.toggleCollapse('sidebar')">
                        <svg class="bi bi-list" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" d="M2.5 11.5A.5.5 0 0 1 3 11h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4A.5.5 0 0 1 3 7h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4A.5.5 0 0 1 3 3h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5z"/>
                        </svg>
                    </button>
                </div>
                <div class="navbar-brand">
                    {{ $slot ?? "Panel Admin" }}
                </div>
            </div>
            <div class="navbar-nav">

            </div>
            <div>
                <div class="nav-item dropdown rounded p-2">
                    <a href="{{ route('admin.pengaturan') }}" class="">
                        <div class="d-flex">
                            <div>
                                <div class="d-flex justify-content-center flex-column h-100 pl-1">
                                    <div class="img-xs rounded bg-gray-light"></div>
                                </div>
                            </div>
                            <div class="pl-2 d-none d-sm-block">
                                <div class="d-flex justify-content-center flex-column h-100">
                                    <div class="small font-weight-bold text-dark">
                                        {{ auth()->user()->info ? auth()->user()->info->nama : auth()->user()->username }}
                                    </div>
                                    <div class="small text-muted">
                                        {{ auth()->user()->email }}
                                    </div>
                                </div>
                            </div>
                            <div>
                                <div class="justify-middle px-3 text-muted" v-on:click.prevent="navbar.toggleCollapse('dropdownHeaderUser')">
                                    <transition name="zoom" mode="out-in">
                                        <div :key="navbar.getCollapse('dropdownHeaderUser', false)">
                                            <div v-if="!navbar.getCollapse('dropdownHeaderUser', false)">
                                                <svg class="bi bi-chevron-down" width=".8em" height=".8em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                                    <path fill-rule="evenodd" d="M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z"/>
                                                </svg>
                                            </div>
                                            <div v-else>
                                                <svg class="bi bi-chevron-compact-down" width=".8em" height=".8em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                                    <path fill-rule="evenodd" d="M1.553 6.776a.5.5 0 0 1 .67-.223L8 9.44l5.776-2.888a.5.5 0 1 1 .448.894l-6 3a.5.5 0 0 1-.448 0l-6-3a.5.5 0 0 1-.223-.67z"/>
                                                </svg>
                                            </div>
                                        </div>
                                    </transition>
                                </div>
                            </div>
                        </div>
                    </a>
                    <transition name="dropdown-fly-down-zoom">
                        <div class="dropdown-menu shadow-sm dropdown-menu-right tip-right-top mt-3 text-white position-absolute" :class="{show: navbar.getCollapse('dropdownHeaderUser', false)}" :key="navbar.getCollapse('dropdownHeaderUser', false)">
                            @component('x.dropdowns.item', [ 'link' => route('home'), 'blank' => true ])
                                <div class="small">
                                    Lihat Website
                                </div>
                                @slot('icon')
                                    <svg class="bi bi-cursor" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" d="M14.082 2.182a.5.5 0 0 1 .103.557L8.528 15.467a.5.5 0 0 1-.917-.007L5.57 10.694.803 8.652a.5.5 0 0 1-.006-.916l12.728-5.657a.5.5 0 0 1 .556.103zM2.25 8.184l3.897 1.67a.5.5 0 0 1 .262.263l1.67 3.897L12.743 3.52 2.25 8.184z"/>
                                    </svg>
                                @endslot
                            @endcomponent
                            @component('x.dropdowns.item')
                                <div class="small">
                                    Pengaturan Profil
                                </div>
                                @slot('icon')
                                    <svg class="bi bi-gear" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" d="M8.837 1.626c-.246-.835-1.428-.835-1.674 0l-.094.319A1.873 1.873 0 0 1 4.377 3.06l-.292-.16c-.764-.415-1.6.42-1.184 1.185l.159.292a1.873 1.873 0 0 1-1.115 2.692l-.319.094c-.835.246-.835 1.428 0 1.674l.319.094a1.873 1.873 0 0 1 1.115 2.693l-.16.291c-.415.764.42 1.6 1.185 1.184l.292-.159a1.873 1.873 0 0 1 2.692 1.116l.094.318c.246.835 1.428.835 1.674 0l.094-.319a1.873 1.873 0 0 1 2.693-1.115l.291.16c.764.415 1.6-.42 1.184-1.185l-.159-.291a1.873 1.873 0 0 1 1.116-2.693l.318-.094c.835-.246.835-1.428 0-1.674l-.319-.094a1.873 1.873 0 0 1-1.115-2.692l.16-.292c.415-.764-.42-1.6-1.185-1.184l-.291.159A1.873 1.873 0 0 1 8.93 1.945l-.094-.319zm-2.633-.283c.527-1.79 3.065-1.79 3.592 0l.094.319a.873.873 0 0 0 1.255.52l.292-.16c1.64-.892 3.434.901 2.54 2.541l-.159.292a.873.873 0 0 0 .52 1.255l.319.094c1.79.527 1.79 3.065 0 3.592l-.319.094a.873.873 0 0 0-.52 1.255l.16.292c.893 1.64-.902 3.434-2.541 2.54l-.292-.159a.873.873 0 0 0-1.255.52l-.094.319c-.527 1.79-3.065 1.79-3.592 0l-.094-.319a.873.873 0 0 0-1.255-.52l-.292.16c-1.64.893-3.433-.902-2.54-2.541l.159-.292a.873.873 0 0 0-.52-1.255l-.319-.094c-1.79-.527-1.79-3.065 0-3.592l.319-.094a.873.873 0 0 0 .52-1.255l-.16-.292c-.892-1.64.902-3.433 2.541-2.54l.292.159a.873.873 0 0 0 1.255-.52l.094-.319z"/>
                                        <path fill-rule="evenodd" d="M8 5.754a2.246 2.246 0 1 0 0 4.492 2.246 2.246 0 0 0 0-4.492zM4.754 8a3.246 3.246 0 1 1 6.492 0 3.246 3.246 0 0 1-6.492 0z"/>
                                    </svg>
                                @endslot
                            @endcomponent
                            @component('x.dropdowns.item')
                                <div class="small">
                                    Keluar
                                </div>
                                @slot('icon')
                                    <svg class="bi bi-power" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" d="M5.578 4.437a5 5 0 1 0 4.922.044l.5-.866a6 6 0 1 1-5.908-.053l.486.875z"/>
                                        <path fill-rule="evenodd" d="M7.5 8V1h1v7h-1z"/>
                                    </svg>
                                @endslot
                            @endcomponent
                        </div>
                    </transition>
                </div>
            </div>
        </div>
    </div>
</div>