<div class="col-md-1 px-0 menu-wrapper">
    <div class="h-100">
        <div class="d-flex justify-content-end h-100">
            <div class="justify-middle position-sticky bg-white rounded" style="max-height: 100vh; top: 0px; z-index: 1">
                <div class="d-flex flex-md-column flex-row">
                    @auth
                        <a href="{{ route('admin') }}" style="height: 60px; width: 60px; color: #444264">
                            <div class="justify-middle">
                                <div class="d-flex justify-content-center">
                                    <div class="rounded-circle bg-gray-light position-relative border border-white" style="height: 1.5rem; width: 1.5rem;">
                                        <div class="rounded-circle bg-success position-absolute border border-white" style="height: .5rem; width: .5rem; bottom: 0rem; right: 0rem;"></div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    @endauth
                    <transition name="fly-left">
                        <a href="javascript:void(0)" v-if="!navbar.getCollapse('menuHome')" @click.prevent="navbar.toggleCollapse('menuHome')" class="rounded px-3 py-2 btn-link bg-white d-block d-md-none" style="height: 60px; width: 60px; color: #444264">
                            <div class="justify-middle">
                                <div class="d-flex justify-content-center">
                                    <svg class="bi bi-list" width="1.5em" height="1.5em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" d="M2.5 11.5A.5.5 0 0 1 3 11h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4A.5.5 0 0 1 3 7h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4A.5.5 0 0 1 3 3h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5z"/>
                                    </svg>
                                </div>
                            </div>
                        </a>
                    </transition>
                    <a href="#profil" class="rounded px-3 py-2 btn-link bg-white d-none d-md-block" style="height: 60px; width: 60px; color: #444264">
                        <div class="justify-middle">
                            <div class="d-flex justify-content-center">
                                <svg class="bi bi-person-lines-fill" width="1.5em" height="1.5em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" d="M1 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H1zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm7 1.5a.5.5 0 0 1 .5-.5h2a.5.5 0 0 1 0 1h-2a.5.5 0 0 1-.5-.5zm-2-3a.5.5 0 0 1 .5-.5h4a.5.5 0 0 1 0 1h-4a.5.5 0 0 1-.5-.5zm0-3a.5.5 0 0 1 .5-.5h4a.5.5 0 0 1 0 1h-4a.5.5 0 0 1-.5-.5zm2 9a.5.5 0 0 1 .5-.5h2a.5.5 0 0 1 0 1h-2a.5.5 0 0 1-.5-.5z"/>
                                </svg>
                            </div>
                        </div>
                    </a>
                    <a href="#" class="rounded px-3 py-2 btn-link bg-white d-none d-md-block" style="height: 60px; width: 60px; color: #444264">
                        <div class="justify-middle">
                            <div class="d-flex justify-content-center">
                                <svg class="bi bi-newspaper" width="1.5em" height="1.5em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" d="M0 2A1.5 1.5 0 0 1 1.5.5h11A1.5 1.5 0 0 1 14 2v12a1.5 1.5 0 0 1-1.5 1.5h-11A1.5 1.5 0 0 1 0 14V2zm1.5-.5A.5.5 0 0 0 1 2v12a.5.5 0 0 0 .5.5h11a.5.5 0 0 0 .5-.5V2a.5.5 0 0 0-.5-.5h-11z"/>
                                    <path fill-rule="evenodd" d="M15.5 3a.5.5 0 0 1 .5.5V14a1.5 1.5 0 0 1-1.5 1.5h-3v-1h3a.5.5 0 0 0 .5-.5V3.5a.5.5 0 0 1 .5-.5z"/>
                                    <path d="M2 3h10v2H2V3zm0 3h4v3H2V6zm0 4h4v1H2v-1zm0 2h4v1H2v-1zm5-6h2v1H7V6zm3 0h2v1h-2V6zM7 8h2v1H7V8zm3 0h2v1h-2V8zm-3 2h2v1H7v-1zm3 0h2v1h-2v-1zm-3 2h2v1H7v-1zm3 0h2v1h-2v-1z"/>
                                </svg>
                            </div>
                        </div>
                    </a>
                    <a href="#" class="rounded px-3 py-2 btn-link bg-white d-none d-md-block" style="height: 60px; width: 60px; color: #444264">
                        <div class="justify-middle">
                            <div class="d-flex justify-content-center">
                                <svg class="bi bi-files-alt" width="1.5em" height="1.5em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" d="M3 1h8a2 2 0 0 1 2 2v10a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2zm0 1a1 1 0 0 0-1 1v10a1 1 0 0 0 1 1h8a1 1 0 0 0 1-1V3a1 1 0 0 0-1-1H3z"/>
                                    <path d="M13 4V3a2 2 0 0 1 2 2v6a2 2 0 0 1-2 2v-1a1 1 0 0 0 1-1V5a1 1 0 0 0-1-1z"/>
                                </svg>
                            </div>
                        </div>
                    </a>
                    <a href="#" class="rounded px-3 py-2 btn-link bg-white d-none d-md-block" style="height: 60px; width: 60px; color: #444264">
                        <div class="justify-middle">
                            <div class="d-flex justify-content-center">
                                <svg class="bi bi-images" width="1.5em" height="1.5em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" d="M12.002 4h-10a1 1 0 0 0-1 1v8a1 1 0 0 0 1 1h10a1 1 0 0 0 1-1V5a1 1 0 0 0-1-1zm-10-1a2 2 0 0 0-2 2v8a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V5a2 2 0 0 0-2-2h-10z"/>
                                    <path d="M10.648 8.646a.5.5 0 0 1 .577-.093l1.777 1.947V14h-12v-1l2.646-2.354a.5.5 0 0 1 .63-.062l2.66 1.773 3.71-3.71z"/>
                                    <path fill-rule="evenodd" d="M4.502 9a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3zM4 2h10a1 1 0 0 1 1 1v8a1 1 0 0 1-1 1v1a2 2 0 0 0 2-2V3a2 2 0 0 0-2-2H4a2 2 0 0 0-2 2h1a1 1 0 0 1 1-1z"/>
                                </svg>
                            </div>
                        </div>
                    </a>
                    <a href="#" class="rounded px-3 py-2 btn-link bg-white d-none d-md-block" style="height: 60px; width: 60px; color: #444264">
                        <div class="justify-middle">
                            <div class="d-flex justify-content-center">
                                <svg class="bi bi-bookmarks-fill" width="1.5em" height="1.5em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" d="M2 4a2 2 0 0 1 2-2h6a2 2 0 0 1 2 2v12l-5-3-5 3V4z"/>
                                    <path d="M14 14l-1-.6V2a1 1 0 0 0-1-1H4.268A2 2 0 0 1 6 0h6a2 2 0 0 1 2 2v12z"/>
                                </svg>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>