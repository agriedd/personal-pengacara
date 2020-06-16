@php
    $isActive = false;
    $name = $name ?? 'undefined';
    $isActive = !!preg_match("/^(admin\/)($name)(.*)/", request()->route()->uri());
@endphp
<div class="item {{ $isActive ? "active" : null }}" {{ $attributes ?? '' }}>
    <div class="inner-item">
        @isset($icon)
            <div class="icon">
                <div class="inner-icon">
                    @if($isActive)
                        {{ $iconActive ?? $icon }}
                    @else
                        {{ $icon }}
                    @endif
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