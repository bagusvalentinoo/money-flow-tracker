@props([
    'id' => '',
    'className' => '',
    'options' => [],
])

<select @if (!empty($id)) id="{{ $id }}" @endif
    {{ $attributes->merge(['class' => 'form-select ' . $className]) }}>
    @foreach ($options as $option)
        <option @if (!empty($option['value'])) value="{{ $option['value'] }} @endif">{{ $option['text'] }}
        </option>
    @endforeach
</select>
