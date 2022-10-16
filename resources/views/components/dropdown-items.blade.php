@props(['active' => false])

@php
    $classes = 'block text-left px-3 text-sm leading-6 hover:bg-blue-300 focus:bg-blue-300 focus:text-white';

   if ($active) $classes .= ' bg-blue-500 text-white text-left';
@endphp

<a {{ $attributes(['class' => $classes])}}>{{ $slot }}</a>