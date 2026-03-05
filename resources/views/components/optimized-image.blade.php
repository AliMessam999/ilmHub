@props(['src', 'alt' => '', 'width' => null, 'height' => null, 'class' => ''])

@php
    use App\Helpers\ImageHelper;
    $optimizedSrc = ImageHelper::getOptimizedImageUrl($src, $width, $height);
    $imageClasses = 'optimized-image ' . $class;
    if (strpos($src, 'upload/offer/') !== false) {
        $imageClasses .= ' offer-icon';
    }
@endphp

<img 
    src="{{ asset($optimizedSrc) }}" 
    alt="{{ $alt }}" 
    @if($width) width="{{ $width }}" @endif
    @if($height) height="{{ $height }}" @endif
    class="{{ $imageClasses }}"
    loading="lazy"
    decoding="async"
    onerror="this.style.display='none'"
>