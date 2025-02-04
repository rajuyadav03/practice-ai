@props([
'type' => 'submit',
'class' => 'btn btn-primary mb-1',
])

<button type="{{ $type }}" class="{{ $class }}" {{ $attributes }}>
    {{ $slot }}
</button>