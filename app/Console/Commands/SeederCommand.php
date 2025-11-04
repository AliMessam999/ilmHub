<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Schema;

class SeederCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:seeder';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        //
        $this->Getdirectory();
    }

    public function Getdirectory()
    {
        // Set the path to your seeders directory
        $seederDirectory = database_path('seeders');
      
        // Get the list of tables in the database
        $originalArray = DB::connection()->getDoctrineSchemaManager()->listTableNames();
        $tables = array_filter($originalArray, function ($value) {
            return strpos($value, 'cd_') !== false;
        });

        foreach ($tables as $table) {
            // Generate a seeder class name
            $className = Str::studly(Str::singular($table)) . 'Seeder';

            // Generate the seeder file path
            $filePath = $seederDirectory . DIRECTORY_SEPARATOR . $className . '.php';

            // Check if the seeder file already exists
            if (!file_exists($filePath)) {
                // Create the seeder file
                file_put_contents($filePath, $this->generateSeederContent($table, $className));
                echo "Seeder created for table '{$table}': {$filePath}\n";
            } else {
                file_put_contents($filePath, $this->generateSeederContent($table, $className));
                echo "Seeder already exists for table '{$table}': {$filePath}\n";
            }
        }
    }

    function generateSeederContent($table, $className)
    {
        $data = [];
        $arr = DB::table($table)->get()->toArray();
        foreach ($arr as $key=>$item) {
            $data[$key] = (array) $item;
           
        }
        $columns = Schema::getColumnListing($table);

        $seederContent = "<?php\n\n";
        $seederContent .= "namespace Database\Seeders;\n\n";
        $seederContent .= "use Illuminate\Database\Seeder;\n";
        $seederContent .= "use Illuminate\Support\Facades\DB;\n\n";
        $seederContent .= "class {$className} extends Seeder\n";
        $seederContent .= "{\n";
        $seederContent .= "    public function run()\n";
        $seederContent .= "    {\n";
        $seederContent .= "        // Seed data for the '{$table}' table\n";
        $seederContent .= "        \$data = " . var_export($data, true) . ";\n";
        $seederContent .= "        DB::table('{$table}')->insert(\$data);\n";
        $seederContent .= "    }\n";
        $seederContent .= "}\n";

        return $seederContent;
    }
}
