<?php

use Illuminate\Database\Seeder;

class RangeTypesMaseterTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('range_types_maseter')->insert([
        [
            'id' => 1,
            'range_type_name' => '近接攻撃'
        ],
        [
            'id' => 2,
            'range_type_name' => '遠隔攻撃'
        ],
        [
            'id' => 3,
            'range_type_name' => '防御'
        ],
        [
            'id' => 4,
            'range_type_name' => '特殊'
        ]
      ]);
    }
}
