@props(['href', 'icon', 'label', 'modifier' => 'primary', 'customAttrs' => ''])

@php
    switch ($modifier) {
        case 'primary':
            $additionalClasses = 'text-white bg-emerald-600 hover:bg-emerald-800 focus:ring-emerald-500';
            break;
        case 'secondary':
            $additionalClasses = 'text-white bg-sky-600 hover:bg-sky-800 focus:ring-sky-500';
            break;
        case 'ghost':
            $additionalClasses = 'rounded bg-white px-2 py-1 text-sm font-semibold text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 hover:bg-gray-50';
            break;
        case 'danger':
            $additionalClasses = 'bg-red-600 hover:bg-red-800 focus:ring-red-500';
            break;
    }
@endphp

@isset($href)
    <a href="{{ $href }}" {!! $customAttrs !!}
        {{ $attributes->merge(['class' => "{$additionalClasses} inline-flex items-center rounded-md border border-transparent px-3 py-1.5 text-sm font-medium leading-4 shadow-sm focus:outline-none focus:ring-2"]) }}>
        @isset($icon)
            <x-dynamic-component :component="$icon" class="mr-1" />
        @endisset
        {{ $label }}
    </a>
@else
    <button {!! $customAttrs !!}
        {{ $attributes->merge(['class' => "{$additionalClasses} inline-flex items-center rounded-md border border-transparent px-3 py-1.5 text-sm font-medium leading-4 shadow-sm focus:outline-none focus:ring-2"]) }}>
        @isset($icon)
            <x-dynamic-component :component="$icon" class="mr-1" />
        @endisset
        {{ $label }}
    </button>
@endisset
