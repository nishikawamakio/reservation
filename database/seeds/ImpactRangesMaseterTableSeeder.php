<?php

use Illuminate\Database\Seeder;

class ImpactRangesMaseterTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('impact_ranges_maseter')->insert([
        [
            'id' => 1,
            'name' => '即時'
        ],
        [
            'id' => 2,
            'name' => '全体'
        ],
        [
            'id' => 3,
            'name' => '自分自身'
        ],
        [
            'id' => 4,
            'name' => '味方側全体'
        ],
        [
            'id' => 5,
            'name' => '敵個体'
        ],
        [
            'id' => 6,
            'name' => '敵複数体（ランダム）'
        ],
        [
            'id' => 7,
            'name' => '敵全体'
        ],
        [
            'id' => 8,
            'name' => '術者'
        ],
        [
            'id' => 9,
            'name' => '術者を中心とした直径[魔力×50]mの地域'
        ],
        [
            'id' => 10,
            'name' => '視界内'
        ],
        [
            'id' => 11,
            'name' => '視界内または遠隔地の知り合い'
        ],
        [
            'id' => 12,
            'name' => '一つの武器'
        ],
        [
            'id' => 13,
            'name' => '一つの物体'
        ],
        [
            'id' => 14,
            'name' => '一つの魔法作用対象'
        ],
        [
            'id' => 15,
            'name' => '触れた部分'
        ],
        [
            'id' => 16,
            'name' => '近接攻撃が届く相手全員'
        ],
        [
            'id' => 17,
            'name' => '幅[魔力×2]m×高さ[魔力÷4（端数切上げ）]m×厚さ[魔力÷10]m'
        ],
        [
            'id' => 18,
            'name' => '直径[魔力×2]mの円形水域'
        ],
        [
            'id' => 19,
            'name' => '直径[魔力×2]mの円形空間'
        ],
        [
            'id' => 20,
            'name' => '直径[魔力×2]mの球形空間'
        ],
        [
            'id' => 21,
            'name' => '直径[魔力÷6（端数切上げ）]m、長さ[魔力×2]m'
        ],
        [
            'id' => 22,
            'name' => '[魔力×2]リットルの水'
        ],
        [
            'id' => 23,
            'name' => '重さ[魔力÷2（端数切上げ）]×100グラムまでの物体'
        ],
        [
            'id' => 24,
            'name' => 'その他'
        ]
      ]);
    }
}
