@props(['src', 'alt' => '', 'width' => null, 'height' => null, 'class' => ''])

@php
    $optimizedSrc = $src;
    if ($width && $height && strpos($src, 'upload/offer/') !== false) {
        $pathInfo = pathinfo($src);
        $optimizedSrc = $pathInfo['dirname'] . '/' . $pathInfo['filename'] . '_' . $width . 'x' . $height . '.' . $pathInfo['extension'];
    }
@endphp

<img 
    src="{{ asset($optimizedSrc) }}" 
    alt="{{ $alt }}" 
    @if($width) width="{{ $width }}" @endif
    @if($height) height="{{ $height }}" @endif
    class="{{ $class }}"
    loading="lazy"
    decoding="async"
>