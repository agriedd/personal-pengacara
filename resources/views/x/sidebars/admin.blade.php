<div class="sidebar" :class="{mini: navbar.getCollapse('sidebar', false)}">
    <div class="inner-sidebar">
        @component('x.sidebars.item')
            @slot('attributes') @click="navbar.toggleCollapse('sidebar')" @endslot
            @slot('icon')
                <svg class="bi bi-list" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" d="M2.5 11.5A.5.5 0 0 1 3 11h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4A.5.5 0 0 1 3 7h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4A.5.5 0 0 1 3 3h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5z"/>
                </svg>
            @endslot
        @endcomponent
        @component('x.sidebars.item')
            @slot('label')
                <div>
                    Wtf
                </div>
            @endslot
            @slot('icon')
                <svg class="bi bi-grid-1x2-fill" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                    <path d="M0 1a1 1 0 0 1 1-1h5a1 1 0 0 1 1 1v14a1 1 0 0 1-1 1H1a1 1 0 0 1-1-1V1zm9 0a1 1 0 0 1 1-1h5a1 1 0 0 1 1 1v5a1 1 0 0 1-1 1h-5a1 1 0 0 1-1-1V1zm0 9a1 1 0 0 1 1-1h5a1 1 0 0 1 1 1v5a1 1 0 0 1-1 1h-5a1 1 0 0 1-1-1v-5z"/>
                </svg>
            @endslot
        @endcomponent
        <div class="item disabled">
            <div class="inner-item">
                <div class="label">
                    <div class="inner-label">
                        <div>
                            Home
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>