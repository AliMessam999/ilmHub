<?php

namespace App\Helpers;

class ImageHelper
{
    public static function getOptimizedImageUrl($imagePath, $width = 38, $height = 38)
    {
        if (empty($imagePath)) {
            return $imagePath;
        }
        
        // For offer icons, return resized version
        if (strpos($imagePath, 'upload/offer/') !== false) {
            $pathInfo = pathinfo($imagePath);
            return $pathInfo['dirname'] . '/' . $pathInfo['filename'] . '_' . $width . 'x' . $height . '.' . $pathInfo['extension'];
        }
        
        return $imagePath;
    }
}