@php
    $model  = $model ?? "navbar";
    $name   = $name ?? 'name';
@endphp
<div v-if="{{ $model }}.error.has('{{ $name }}')" class="w-100">
    <div class="p-3 d-flex justify-content-end">
        <div class="card clean tip-right-top bg-danger text-danger">
            <div class="card-body text-light">
                <div class="small" v-text="{{ $model }}.error.first('{{ $name }}')"></div>
                {{ $slot }}
            </div>
        </div>
    </div>
</div>