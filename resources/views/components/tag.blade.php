@props(['label', 'modifier' => 'green', 'full' => false])

@php
    $additionalClasses = '';
    switch ($modifier) {
        case 'gray':
            $additionalClasses = 'bg-gray-100 text-gray-800';
            break;
        case 'red':
            $additionalClasses = 'bg-red-100 text-red-800';
            break;
        case 'yellow':
            $additionalClasses = 'bg-yellow-100 text-yellow-800';
            break;
        case 'green':
            $additionalClasses = 'bg-green-100 text-green-800';
            break;
        case 'blue':
            $additionalClasses = 'bg-blue-100 text-blue-800';
            break;
        case 'indigo':
            $additionalClasses = 'bg-indigo-100 text-indigo-800';
            break;
        case 'purple':
            $additionalClasses = 'bg-purple-100 text-purple-800';
            break;
        case 'pink':
            $additionalClasses = 'bg-pink-100 text-pink-800';
            break;
        case 'orange':
            $additionalClasses = 'bg-orange-100 text-orange-800';
            break;
    }

    if ($full) {
        $additionalClasses = $additionalClasses . ' flex justify-center';
    } else {
        $additionalClasses = $additionalClasses . ' inline-flex items-center';
    }
@endphp

<span {{ $attributes->merge(['class' => "{$additionalClasses} rounded px-2 py-0.5 text-xs font-medium"]) }}>
    {{ $label }}
</span>
