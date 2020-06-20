<div class="card clean {{ $tip ?? null }}" style="max-width: {{ $width ?? "auto" }}">
    <div class="card-body {{ $card ?? null }}">
        {{ $slot }}
    </div>
</div>