<!-- resources/views/scripts/seeder.blade.php -->

use Illuminate\Database\Seeder;

class {{ $className }} extends Seeder
{
    public function run()
    {
        $data = @json_decode('{{ json_encode($data) }}', true);

        if ($data) {
            foreach ($data as $record) {
                DB::table('{{ $tableName }}')->insert($record);
            }
        }
    }
}
