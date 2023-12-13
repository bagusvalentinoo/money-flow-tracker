@props([
    'id' => '',
    'name' => '',
    'type' => 'text',
    'placeholder' => '',
    'value' => '',
    'className' => '',
    'disabled' => false,
    'required' => false,
    'readonly' => false,
])

<input @if (!empty($id)) id="{{ $id }}" @endif
    {{ $attributes->merge(['class' => 'form-control ' . $className]) }}
    @if (!empty($name)) name="{{ $name }}" @endif type="{{ $type }}"
    @if (!empty($placeholder)) placeholder="{{ $placeholder }}" @endif
    @if (!empty($value)) value="{{ $value }}" @endif
    @if ($disabled) disabled @endif @if ($required) required @endif
    @if ($readonly) readonly="readonly" @endif>
