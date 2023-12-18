@props([
    'id' => '',
    'type' => 'button',
    'text' => '',
    'iconTagI' => '',
    'iconTagImg' => '',
    'iconTagImgClass' => '',
    'iconTagImgAlt' => '',
    'className' => '',
    'disabled' => false,
    'iconMargin' => false,
])

<button @if (!empty($id)) id="{{ $id }}" @endif type="{{ $type }}"
    {{ $attributes->merge(['class' => 'btn ' . $className]) }} @if ($disabled) disabled @endif>
    @if (!empty($iconTagI))
        <i class="{{ $iconTagI }} @if ($iconMargin) me-2 @endif"></i>
    @endif
    @if (!empty($iconTagImg))
        <img src="{{ $iconTagImg }}" alt="{{ $iconTagImgAlt }}"
            @if ($iconMargin) {{ $attributes->merge(['class' => 'me-2 ' . $iconTagImgClass]) }} @endif
            @if ($iconTagImgClass) {{ $attributes->merge(['class' => $iconTagImgClass]) }} @endif>
    @endif
    @if (!empty($text))
        {{ $text }}
    @endif
</button>
