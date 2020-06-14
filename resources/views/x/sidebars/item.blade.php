<div class="item" {{ $attributes ?? '' }}>
    <div class="inner-item">
        @isset($icon)
            <div class="icon">
                <div class="inner-icon">
                    {{ $icon }}
                </div>
            </div>
        @endisset
        <div class="label">
            <div class="inner-label">
                {{ $label ?? '' }}
            </div>
        </div>
    </div>
</div>