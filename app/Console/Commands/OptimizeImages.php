<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Helpers\ImageHelper;
use App\Models\CdOffer;
use Illuminate\Support\Facades\File;

class OptimizeImages extends Command
{
    protected $signature = 'images:optimize {--type=offer : Type of images to optimize}';
    protected $description = 'Generate optimized versions of existing images';

    public function handle()
    {
        $type = $this->option('type');
        
        if ($type === 'offer') {
            $this->optimizeOfferImages();
        }
        
        $this->info('Image optimization completed!');
    }
    
    private function optimizeOfferImages()
    {
        $this->info('Optimizing offer images...');
        
        $offers = CdOffer::whereNotNull('image')->get();
        $bar = $this->output->createProgressBar($offers->count());
        
        foreach ($offers as $offer) {
            if (File::exists(public_path($offer->image))) {
                ImageHelper::generateThumbnails($offer->image);
                $this->line("Optimized: {$offer->image}");
            }
            $bar->advance();
        }
        
        $bar->finish();
        $this->newLine();
    }
}