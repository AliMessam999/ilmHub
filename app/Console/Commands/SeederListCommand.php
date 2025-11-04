<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\File;

class SeederListCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:seeder-list';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'List Of All Seeder description';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $seederDirectory = database_path('seeders'); // Adjust the directory path as needed
        $seederFiles = File::files($seederDirectory);
        $databaseSeederFile = database_path('seeders/DatabaseSeeder.php');

        $seederClassNames = [];

        foreach ($seederFiles as $seederFile) {
            $seederContent = File::get($seederFile);
            preg_match('/class\s+(\w+Seeder)/', $seederContent, $matches);
            if ($matches && count($matches) > 1) {
                $seederClassNames[] = $matches[1];
            }
        }
        $seederClassNames = array_filter($seederClassNames, function ($value) {
            return strpos($value, 'Cd') !== false;
        });
        // dd($seederClassNames);

        if (count($seederClassNames) > 0) {
            $this->updateDatabaseSeeder($databaseSeederFile, $seederClassNames);
            $this->info('DatabaseSeeder updated successfully.');
        } else {
            $this->info('No seeders found in the specified directory.');
        }
    }
    private function updateDatabaseSeeder($file, $seederClassNames)
    {
        $databaseSeederContent = File::get($file);

        // Add new seeder class names to the $seeds array
        $newSeedsArray = "\$seeds = [\n";
        foreach ($seederClassNames as $seederClassName) {
            $newSeedsArray .= "        {$seederClassName}::class,\n";
        }
        $newSeedsArray .= "    ];";
        // dd($newSeedsArray);
        // Replace the existing $seeds array in DatabaseSeeder.php
        $databaseSeederContent = preg_replace(
            '/\$seeds\s*=\s*\[[^\]]*\];/s',
            $newSeedsArray,
            $databaseSeederContent
        );

        // Save the updated content back to DatabaseSeeder.php
        File::put($file, $databaseSeederContent);
    }
}

