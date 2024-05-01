<?php

namespace Database\Seeders;

use App\Models\Kabupaten;
use Database\Seeders\CsvtoArray;
use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class KabupatenSeeder extends Seeder
{
    public function run()
    {
        $now = Carbon::now();
        $Csv = new CsvtoArray();
        $file = __DIR__.'/../../public/csv/cities.csv';
        $header = ['code', 'province_code', 'name', 'lat', 'long'];
        $data = $Csv->csv_to_array($file, $header);
        $data = array_map(function ($arr) use ($now) {
            $arr['meta'] = json_encode(['lat' => $arr['lat'], 'long' => $arr['long']]);
            unset($arr['lat'], $arr['long']);

            return $arr + ['created_at' => $now, 'updated_at' => $now];
        }, $data);

        $collection = collect($data);
        foreach ($collection->chunk(50) as $chunk) {
            DB::table('kabupaten')->insertOrIgnore($chunk->toArray());
        }
    }
}
