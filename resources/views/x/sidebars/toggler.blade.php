@php
    $isActive = false;
    $name = $name ?? 'undefined';
    $isActive = !!preg_match("/^(admin\/)($name)(.*)/", request()->route()->uri());
    $disabled = isset($disabled) && $disabled ? 'disabled' : '';
@endphp
<div class="item {{ $isActive ? "active" : null }} {{ $disabled ?? '' }}" {{ $attributes ?? '' }}>
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