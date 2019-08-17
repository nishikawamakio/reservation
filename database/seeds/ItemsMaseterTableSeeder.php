<?php

use Illuminate\Database\Seeder;

class ItemsMaseterTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('items_master')->insert([
        [
            'item_type_name' => 'HP回復薬',
            'impact_range_id' => 5, // 自分自身
            'effect_time' => 0, // 即時
            'use_count' => 1,
            'consumption_gp' => 20,
            'description' => '自分自身のHPを［ランダム11～20]回復します。',
        ],
        [
            'item_type_name' => 'MP回復薬  ',
            'impact_range_id' => 5, // 自分自身
            'effect_time' => 0, // 即時
            'use_count' => 1,
            'consumption_gp' => 100,
            'description' => '自分自身のMPを［ランダム1～10]回復します。',
        ],
        [
            'item_type_name' => '煙幕',
            'impact_range_id' => 6, // 敵
            'effect_time' => 2, // ターン
            'use_count' => 1,
            'consumption_gp' => 50,
            'description' => '敵を煙に巻くことで、マップ系オートミッションで敵から逃走する際のPC全員の〔敏捷〕能力判定に＋3の修正を得ることができます。通常ミッションでの効果は、MMによって判断されます。',
        ],
        [
            'item_type_name' => 'たいまつ',
            'impact_range_id' => 99, // その他
            'effect_time' => 2, // 時間
            'use_count' => 1,
            'consumption_gp' => 10,
            'description' => '1本につき2時間燃え続けることができます。使い捨てになります。',
        ],
      ]);
    }
}
