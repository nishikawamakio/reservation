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
            'range_type_name' => '正面1マス'
        ],
        [
            'range_type_name' => '正面5マス'
        ],
        [
            'range_type_name' => '周囲1マス'
        ],
        [
            'range_type_name' => '周囲5マス'
        ]
      ]);
    }
}
