@props([
    'label' => null,
    'route' => null,
    'url' => null,
    'href' => null,
])

@php
    if ($route) $href = route($route);
    else if ($url) $href = url($url);

    $attributes = $attributes->class([
        'dropdown-item',
        'active' => $href == Request::url(),
    ])->merge([
        'type' => !$href ? 'button' : null,
        'href' => $href,
    ]);
@endphp

<{{ $href ? 'a' : 'button' }} {{ $attributes }}>
    {{ $label ?? $slot }}
</{{ $href ? 'a' : 'button' }}>
