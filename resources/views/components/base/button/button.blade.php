@props([
    'id' => '',
    'type' => 'button',
    'text' => '',
    'icon' => '',
    'className' => '',
    'disabled' => false,
    'iconMargin' => false,
])

<button @if (!empty($id)) id="{{ $id }}" @endif type="{{ $type }}"
    {{ $attributes->merge(['class' => 'btn ' . $className]) }} @if ($disabled) disabled @endif>
    @if (!empty($icon))
        <i class="{{ $icon }} @if ($iconMargin) me-2 @endif"></i>
    @endif
    @if (!empty($text))
        {{ $text }}
    @endif
</button>
