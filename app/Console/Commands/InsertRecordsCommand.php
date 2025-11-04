<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class InsertRecordsCommand extends Command
{
        protected $signature = 'insert:records {table}';
        protected $description = 'Insert records from the specified table';
    
        public function handle()
        {
            $tableName = $this->argument('table');
    
            if (!$this->tableExists($tableName)) {
                $this->error("Table '{$tableName}' does not exist.");
                return;
            }
    
            $columns = Schema::getColumnListing($tableName);
            $data = [];
            $bar = $this->output->createProgressBar(count($data));
    
            foreach ($columns as $column) {
            $data[$column] = $this->ask("Enter value for '$column':");
            }

             DB::table($tableName)->insert($data);
    
            $bar->finish();
            $this->info("\nRecords inserted successfully from the '{$tableName}' table.");
        }
    
        private function tableExists($tableName)
        {
            return DB::getSchemaBuilder()->hasTable($tableName);
        }
        
}
