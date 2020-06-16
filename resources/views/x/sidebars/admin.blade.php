<div class="sidebar dark" :class="{mini: navbar.getCollapse('sidebar', false)}">
    <div class="inner-sidebar">
        @component('x.sidebars.item')
            @slot('attributes') @click="navbar.toggleCollapse('sidebar')" @endslot
            @slot('icon')
                <svg class="bi bi-list" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" d="M2.5 11.5A.5.5 0 0 1 3 11h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4A.5.5 0 0 1 3 7h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4A.5.5 0 0 1 3 3h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5z"/>
                </svg>
            @endslot
        @endcomponent
        @component('x.sidebars.item', [ 'name' => 'artikel' ])
            @slot('label')
                <div>
                    Artikel Lorem, ipsum dolor sit amet consectetur adipisicing elit. In, ut?
                </div>
            @endslot
            @slot('iconActive')
                <svg class="bi bi-collection-fill" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                    <rect width="16" height="10" rx="1.5" transform="matrix(1 0 0 -1 0 14.5)"/>
                    <path fill-rule="evenodd" d="M2 3a.5.5 0 0 0 .5.5h11a.5.5 0 0 0 0-1h-11A.5.5 0 0 0 2 3zm2-2a.5.5 0 0 0 .5.5h7a.5.5 0 0 0 0-1h-7A.5.5 0 0 0 4 1z"/>
                </svg>
            @endslot
            @slot('icon')
                <svg class="bi bi-collection" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" d="M14.5 13.5h-13A.5.5 0 0 1 1 13V6a.5.5 0 0 1 .5-.5h13a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-.5.5zm-13 1A1.5 1.5 0 0 1 0 13V6a1.5 1.5 0 0 1 1.5-1.5h13A1.5 1.5 0 0 1 16 6v7a1.5 1.5 0 0 1-1.5 1.5h-13zM2 3a.5.5 0 0 0 .5.5h11a.5.5 0 0 0 0-1h-11A.5.5 0 0 0 2 3zm2-2a.5.5 0 0 0 .5.5h7a.5.5 0 0 0 0-1h-7A.5.5 0 0 0 4 1z"/>
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
    <div class="sidebar-backdrop" v-on:click.self="navbar.toggleCollapse('sidebar', true)"></div>
</div>