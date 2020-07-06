@php
    $isActive = false;
    $name = $name ?? 'undefined';
    $default = !!preg_match("/^(admin\/?)$/", request()->route()->uri()) && $name == "default";
    $isActive = !!preg_match("/^(admin\/)($name)(.*)/", request()->route()->uri()) || $default;
    $disabled = isset($disabled) && $disabled ? 'disabled' : '';
@endphp
<div class="item {{ $isActive ? "active" : null }} {{ $disabled ?? '' }}" {{ $attributes ?? '' }} key="{{ $name }}">
    <a href="{{ $link ?? '#' }}" class="inner-item">
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
        @isset($rightIcon)
            <div class="action">
                <div class="inner-action">
                    {!! $rightIcon !!}
                </div>
            </div>
        @endisset
    </a>
</div>