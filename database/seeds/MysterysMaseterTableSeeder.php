<?php

use Illuminate\Database\Seeder;

class MysterysMaseterTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('mysterys_maseter')->insert([
        [
            'mysterys_type_name' => '範囲型攻撃魔法',
            'range_type_id' => 4,
            'impact_range_id' => 3,
            'prerequisites_type' => 1,
            'consumption_point' => 200,
            'consumption_ster_point' => 200,
            'necessary_point' => 1000,
            'description' => '広範囲の炎属性攻撃',
        ],
        [
            'mysterys_type_name' => '範囲型蘇生魔法',
            'range_type_id' => 4,
            'impact_range_id' => 1,
            'prerequisites_type' => 1,
            'consumption_point' => 300,
            'consumption_ster_point' => 300,
            'necessary_point' => 2000,
            'description' => '味方全員の確実な蘇生',
        ],
        [
            'mysterys_type_name' => '範囲型斬撃',
            'range_type_id' => 4,
            'impact_range_id' => 1,
            'prerequisites_type' => 1,
            'consumption_point' => 100,
            'consumption_ster_point' => 100,
            'necessary_point' => 500,
            'description' => '広範囲の斬撃',
        ]
      ]);
    }
}
