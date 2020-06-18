@php
    $link = $link ?? '#';
    $blank = isset($blank) && $blank == true ? true : false;
@endphp
<a href="{{ $link }}" class="dropdown-item" target="{{ $blank ? "_blank" : "" }}">
    <div class="d-flex py-3">
        @isset($icon)
            <div class="pr-3">
                <div class="justify-middle">
                    {{ $icon }}
                </div>
            </div>
        @endisset
        <div>
            <div class="justify-middle">
                {{ $slot }}
            </div>
        </div>
    </div>
</a>