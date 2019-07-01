<?php

use Illuminate\Database\Seeder;

class MagicsMaseterTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('magics_maseter')->insert([
        [
            'id' => 1,
            'magic_type_name' => '直線型1マス攻撃',
            'magic_level' => 1,
            'range_type_id' => 2,
            'impact_range_id' => 1,
            'impact_time' => 5,
            'consumption_point' => 5,
            'necessary_point' => 50,
        ],
        [
            'id' => 2,
            'magic_type_name' => '範囲型1マス攻撃',
            'magic_level' => 2,
            'range_type_id' => 3,
            'impact_range_id' => 1,
            'impact_time' => 5,
            'consumption_point' => 10,
            'necessary_point' => 50,
        ],
        [
            'id' => 3,
            'magic_type_name' => '範囲型5マス攻撃',
            'magic_level' => 3,
            'range_type_id' => 4,
            'impact_range_id' => 3,
            'impact_time' => 10,
            'consumption_point' => 20,
            'necessary_point' => 100,
        ],
      ]);
    }
}
