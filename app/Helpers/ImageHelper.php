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
            $optimizedPath = $pathInfo['dirname'] . '/' . $pathInfo['filename'] . '_' . $width . 'x' . $height . '.' . $pathInfo['extension'];
            
            // Check if optimized version exists, if not create it
            if (!file_exists(public_path($optimizedPath))) {
                self::createOptimizedImage($imagePath, $width, $height);
            }
            
            return $optimizedPath;
        }
        
        return $imagePath;
    }
    
    public static function createOptimizedImage($originalPath, $width, $height)
    {
        try {
            $fullPath = public_path($originalPath);
            
            if (!file_exists($fullPath)) {
                return false;
            }
            
            $pathInfo = pathinfo($originalPath);
            $optimizedPath = public_path($pathInfo['dirname'] . '/' . $pathInfo['filename'] . '_' . $width . 'x' . $height . '.' . $pathInfo['extension']);
            
            // Create optimized directory if it doesn't exist
            $optimizedDir = dirname($optimizedPath);
            if (!is_dir($optimizedDir)) {
                mkdir($optimizedDir, 0755, true);
            }
            
            // Get image info
            $imageInfo = getimagesize($fullPath);
            if (!$imageInfo) {
                return false;
            }
            
            $originalWidth = $imageInfo[0];
            $originalHeight = $imageInfo[1];
            $mimeType = $imageInfo['mime'];
            
            // Create image resource from original
            switch ($mimeType) {
                case 'image/jpeg':
                    $sourceImage = imagecreatefromjpeg($fullPath);
                    break;
                case 'image/png':
                    $sourceImage = imagecreatefrompng($fullPath);
                    break;
                case 'image/gif':
                    $sourceImage = imagecreatefromgif($fullPath);
                    break;
                default:
                    return false;
            }
            
            if (!$sourceImage) {
                return false;
            }
            
            // Calculate aspect ratio
            $aspectRatio = $originalWidth / $originalHeight;
            
            if ($width / $height > $aspectRatio) {
                $newWidth = $height * $aspectRatio;
                $newHeight = $height;
            } else {
                $newWidth = $width;
                $newHeight = $width / $aspectRatio;
            }
            
            // Create new image
            $resizedImage = imagecreatetruecolor($newWidth, $newHeight);
            
            // Preserve transparency for PNG and GIF
            if ($mimeType === 'image/png' || $mimeType === 'image/gif') {
                imagealphablending($resizedImage, false);
                imagesavealpha($resizedImage, true);
                $transparent = imagecolorallocatealpha($resizedImage, 255, 255, 255, 127);
                imagefill($resizedImage, 0, 0, $transparent);
            }
            
            // Resize image
            imagecopyresampled(
                $resizedImage, $sourceImage,
                0, 0, 0, 0,
                $newWidth, $newHeight,
                $originalWidth, $originalHeight
            );
            
            // Save resized image
            switch ($mimeType) {
                case 'image/jpeg':
                    imagejpeg($resizedImage, $optimizedPath, 85);
                    break;
                case 'image/png':
                    imagepng($resizedImage, $optimizedPath, 6);
                    break;
                case 'image/gif':
                    imagegif($resizedImage, $optimizedPath);
                    break;
            }
            
            // Clean up memory
            imagedestroy($sourceImage);
            imagedestroy($resizedImage);
            
            return true;
        } catch (\Exception $e) {
            \Log::error('Image optimization failed: ' . $e->getMessage());
            return false;
        }
    }
    
    public static function generateThumbnails($imagePath)
    {
        $sizes = [
            ['width' => 38, 'height' => 38],   // Icon size
            ['width' => 150, 'height' => 150], // Small thumbnail
            ['width' => 300, 'height' => 300], // Medium thumbnail
        ];
        
        foreach ($sizes as $size) {
            self::createOptimizedImage($imagePath, $size['width'], $size['height']);
        }
    }
}