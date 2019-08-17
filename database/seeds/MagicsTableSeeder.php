<?php

use Illuminate\Database\Seeder;

class MagicsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('magics')->insert([
        [
            'character_id' => 2,
            'magic_masters_id' => 1,
            'magic_name' => 'メラ',
        ],
        [
            'character_id' => 2,
            'magic_masters_id' => 2,
            'magic_name' => 'ギラ',
        ],
        [
            'character_id' => 2,
            'magic_masters_id' => 3,
            'magic_name' => 'メラゾーマ',
        ],
      ]);
    }
}
