@props(['tag', 'size' => 'base'])

@php

    $classes = 'bg-white/20 hover:bg-white/40 transition-colors duration-300 rounded-xl font-bold';

    if ($size == 'base') {
        $classes .= ' px-5 py-1 text-sm';
    }

    if ($size == 'small') {
        $classes .= ' px-3 py-1 text-2xs';
    }

@endphp

<a href="/tags/{{ strtolower($tag->name) }}" class="{{ $classes }}" href="">{{ $tag->name }}</a>
