@props([
    'id' => '',
    'name' => '',
    'type' => 'checkbox',
    'value' => '',
    'className' => '',
    'disabled' => false,
    'checked' => false,
    'required' => false,
])

<div class="form-check">
    <div class="checkbox">
        <input @if (!empty($id)) id="{{ $id }}" @endif type="{{ $type }}"
            {{ $attributes->merge(['class' => 'form-check-input ' . $className]) }}
            @if (!empty($name)) name="{{ $name }}" @endif
            @if (!empty($value)) value="{{ $value }}" @endif
            @if ($disabled) disabled @endif @if ($checked) checked @endif
            @if ($required) disabled @endif>
    </div>
</div>
