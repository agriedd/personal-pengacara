<div class="btn-group">
    <button class="btn btn-sm px-3 py-2 shadow-sm" @click.prevent="artikel.data.info.status = !artikel.data.info.status" type="button" :class="[ artikel.data.info.status ? 'btn-success' : 'btn-dark' ]">
        <transition name="fly-down" mode="out-in">
            <div :key="artikel.data.info.status">
                <div v-if="artikel.data.info.status">
                    Publikasi
                </div>
                <div v-else>
                    Konsep
                </div>
            </div>
        </transition>
    </button>
    <button class="btn btn-sm px-3 py-2 shadow-sm disabled" type="button" :class="[ artikel.data.info.status ? 'btn-success' : 'btn-dark' ]">
        <transition name="fly-up" mode="out-in">
            <div :key="artikel.data.info.status">
                <div v-if="artikel.data.info.status">
                    <svg class="bi bi-brightness-alt-high-fill" width="1.2em" height="1.2em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" d="M4 11a4 4 0 1 1 8 0 .5.5 0 0 1-.5.5h-7A.5.5 0 0 1 4 11zm4-8a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-1 0v-2A.5.5 0 0 1 8 3zm8 8a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1 0-1h2a.5.5 0 0 1 .5.5zM3 11a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1 0-1h2a.5.5 0 0 1 .5.5zm10.657-5.657a.5.5 0 0 1 0 .707l-1.414 1.414a.5.5 0 1 1-.707-.707l1.414-1.414a.5.5 0 0 1 .707 0zM4.464 7.464a.5.5 0 0 1-.707 0L2.343 6.05a.5.5 0 0 1 .707-.707l1.414 1.414a.5.5 0 0 1 0 .707z"/>
                    </svg>
                </div>
                <div v-else>
                    <svg class="bi bi-eye-slash-fill" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                        <path d="M10.79 12.912l-1.614-1.615a3.5 3.5 0 0 1-4.474-4.474l-2.06-2.06C.938 6.278 0 8 0 8s3 5.5 8 5.5a7.029 7.029 0 0 0 2.79-.588zM5.21 3.088A7.028 7.028 0 0 1 8 2.5c5 0 8 5.5 8 5.5s-.939 1.721-2.641 3.238l-2.062-2.062a3.5 3.5 0 0 0-4.474-4.474L5.21 3.089z"/>
                        <path d="M5.525 7.646a2.5 2.5 0 0 0 2.829 2.829l-2.83-2.829zm4.95.708l-2.829-2.83a2.5 2.5 0 0 1 2.829 2.829z"/>
                        <path fill-rule="evenodd" d="M13.646 14.354l-12-12 .708-.708 12 12-.708.708z"/>
                    </svg>
                </div>
            </div>
        </transition>
    </button>
</div>