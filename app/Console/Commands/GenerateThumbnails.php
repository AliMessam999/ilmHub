<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Helpers\ImageHelper;
use Illuminate\Support\Facades\File;

class GenerateThumbnails extends Command
{
    protected $signature = 'images:generate-thumbnails';
    protected $description = 'Generate thumbnails for existing images';

    public function handle()
    {
        $this->info('Generating thumbnails for offer images...');
        
        $offerPath = public_path('upload/offer');
        
        if (!is_dir($offerPath)) {
            $this->error('Offer directory not found');
            return;
        }

        $files = File::files($offerPath);
        $processed = 0;

        foreach ($files as $file) {
            if (in_array($file->getExtension(), ['png', 'jpg', 'jpeg'])) {
                $relativePath = 'upload/offer/' . $file->getFilename();
                ImageHelper::optimized($relativePath, 38, 38);
                $processed++;
                $this->line("Processed: {$file->getFilename()}");
            }
        }

        $this->info("Generated thumbnails for {$processed} images");
    }
}