<?php

namespace App\Helpers;

class ImageHelper
{
    public static function optimized($imagePath, $width = null, $height = null)
    {
        if (!$imagePath) return $imagePath;

        $pathInfo = pathinfo($imagePath);
        $thumbnailPath = $pathInfo['dirname'] . '/thumbs/' . $pathInfo['filename'] . '_' . $width . 'x' . $height . '.' . $pathInfo['extension'];
        
        if (file_exists(public_path($thumbnailPath))) {
            return asset($thumbnailPath);
        }
        
        $thumbnailDir = public_path($pathInfo['dirname'] . '/thumbs');
        if (!is_dir($thumbnailDir)) {
            mkdir($thumbnailDir, 0755, true);
        }
        
        self::createThumbnail(public_path($imagePath), public_path($thumbnailPath), $width, $height);
        
        return asset($thumbnailPath);
    }

    private static function createThumbnail($sourcePath, $destPath, $width, $height)
    {
        if (!file_exists($sourcePath)) return false;

        $imageInfo = getimagesize($sourcePath);
        if (!$imageInfo) return false;

        $mimeType = $imageInfo['mime'];
        
        switch ($mimeType) {
            case 'image/jpeg':
                $sourceImage = imagecreatefromjpeg($sourcePath);
                break;
            case 'image/png':
                $sourceImage = imagecreatefrompng($sourcePath);
                break;
            default:
                return false;
        }

        $destImage = imagecreatetruecolor($width, $height);
        
        if ($mimeType == 'image/png') {
            imagealphablending($destImage, false);
            imagesavealpha($destImage, true);
            $transparent = imagecolorallocatealpha($destImage, 255, 255, 255, 127);
            imagefilledrectangle($destImage, 0, 0, $width, $height, $transparent);
        }

        imagecopyresampled($destImage, $sourceImage, 0, 0, 0, 0, $width, $height, $imageInfo[0], $imageInfo[1]);

        switch ($mimeType) {
            case 'image/jpeg':
                imagejpeg($destImage, $destPath, 85);
                break;
            case 'image/png':
                imagepng($destImage, $destPath, 9);
                break;
        }

        imagedestroy($sourceImage);
        imagedestroy($destImage);
        return true;
    }
}