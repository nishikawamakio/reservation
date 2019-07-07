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
            'magic_type_name' => '魔法防御',
            'magic_level' => 1,
            'range_type_id' => 1, // 視界内
            'impact_range_id' => 1, // 個体
            'impact_time' => 1, // 分
            'consumption_point' => 1,
            'necessary_point' => 100,
        ],
        [
            'id' => 2,
            'magic_type_name' => '魔法解除',
            'magic_level' => 1,
            'range_type_id' => 1, // 視界内
            'impact_range_id' => 2, // 一つの魔法作用対象
            'impact_time' => 0, // 一瞬
            'consumption_point' => 1,
            'necessary_point' => 100,
        ],
        [
            'id' => 3,
            'magic_type_name' => '着火',
            'magic_level' => 1,
            'range_type_id' => 2, // 接触
            'impact_range_id' => 3, // 触れた部分
            'impact_time' => 0, // 一瞬
            'consumption_point' => 1,
            'necessary_point' => 100,
        ],
        [
            'id' => 4,
            'magic_type_name' => '個体衝撃攻撃',
            'magic_level' => 2,
            'range_type_id' => 1, // 視界内
            'impact_range_id' => 1, // 個体
            'impact_time' => 0, // 一瞬
            'consumption_point' => 2,
            'necessary_point' => 200,
        ],
        [
            'id' => 5,
            'magic_type_name' => '炎熱武器強化',
            'magic_level' => 3,
            'range_type_id' => 1, // 視界内
            'impact_range_id' => 4, // 一つの武器
            'impact_time' => 3, // 分
            'consumption_point' => 3,
            'necessary_point' => 400,
        ],
      ]);
    }
}
