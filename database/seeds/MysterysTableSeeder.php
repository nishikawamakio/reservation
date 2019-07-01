<?php

use Illuminate\Database\Seeder;

class MysterysTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('mysterys')->insert([
        [
            'character_id' => 1,
            'mystery_masters_id' => 3,
            'mystery_name' => 'ドリームソード',
        ],
        [
            'character_id' => 2,
            'mystery_masters_id' => 1,
            'mystery_name' => 'ヘルファイア',
        ],
        [
            'character_id' => 1,
            'mystery_masters_id' => 3,
            'mystery_name' => 'ザオラガ',
        ],
      ]);
    }
}
