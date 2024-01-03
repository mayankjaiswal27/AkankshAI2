@props(['active'])

@php
$classes = ($active ?? false)
            ? 'navb'
            : 'navb-active';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>
