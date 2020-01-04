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
            'item_type_name' => 'ヒーリングポーション',
            'impact_range_id' => 3,
            'effect_time' => 5,
            'duration' => 1,
            'usable_count' => 1,
            'consumption_gp' => 20,
            'description' => '自分自身のHPを［ランダム11～20]回復します。'
        ],
        [
            'item_type_name' => 'ハイヒーリングポーション',
            'impact_range_id' => 3,
            'effect_time' => 5,
            'duration' => 1,
            'usable_count' => 1,
            'consumption_gp' => 60,
            'description' => '自分自身のHPを［ランダム31～40]回復します。'
        ],
        [
            'item_type_name' => 'ハイパーヒーリングポーション',
            'impact_range_id' => 3,
            'effect_time' => 5,
            'duration' => 1,
            'usable_count' => 1,
            'consumption_gp' => 100,
            'description' => '自分自身のHPを［ランダム51～60]回復します。'
        ],
        [
            'item_type_name' => 'リフレッシュポーション',
            'impact_range_id' => 3,
            'effect_time' => 5,
            'duration' => 1,
            'usable_count' => 1,
            'consumption_gp' => 100,
            'description' => '自分自身のMPを［ランダム1～10]回復します。'
        ],
        [
            'item_type_name' => 'デトックスポーション',
            'impact_range_id' => 3,
            'effect_time' => 5,
            'duration' => 1,
            'usable_count' => 1,
            'consumption_gp' => 80,
            'description' => '自分自身の「生命毒」「生命猛毒」ステータスを解除します。（本来「麻痺毒」も解除できますが、自分自身が動けないため事実上使用不可能になります）'
        ],
        [
            'item_type_name' => '煙幕',
            'impact_range_id' => 5,
            'effect_time' => 7,
            'duration' => '2ターン',
            'usable_count' => 1,
            'consumption_gp' => 50,
            'description' => '敵を煙に巻くことで、マップ系オートミッションで敵から逃走する際のPC全員の〔敏捷〕能力判定に＋3の修正を得ることができます。通常ミッションでの効果は、MMによって判断されます。'
        ],
        [
            'item_type_name' => 'たいまつ',
            'impact_range_id' => 24,
            'effect_time' => 'その他',
            'duration' => '2時間',
            'usable_count' => 1,
            'consumption_gp' => 10,
            'description' => '1本につき2時間燃え続けることができます。使い捨てになります。'
        ],
        [
            'item_type_name' => 'ランタン',
            'impact_range_id' => 24,
            'effect_time' => 'その他',
            'duration' => 'その他',
            'usable_count' => 繰り返し利用可能,
            'consumption_gp' => 100,
            'description' => '油を注ぐことで繰り返し利用できる照明器具です。'
        ],
        [
            'item_type_name' => '火口箱',
            'impact_range_id' => 24,
            'effect_time' => 'その他',
            'duration' => 'その他',
            'usable_count' => 繰り返し利用可能,
            'consumption_gp' => 20,
            'description' => '火を着けるための道具です。'
        ],
        [
            'item_type_name' => '燃料油',
            'impact_range_id' => 24,
            'effect_time' => 'その他',
            'duration' => '12時間',
            'usable_count' => 1,
            'consumption_gp' => 10,
            'description' => 'ランタン用の燃料油です。12時間ランタンに火を灯すことができます。'
        ],
        [
            'item_type_name' => 'ロープ',
            'impact_range_id' => 24,
            'effect_time' => 'その他',
            'duration' => 'その他',
            'usable_count' => 繰り返し利用可能,
            'consumption_gp' => 10,
            'description' => '10メートルの長さのロープです。【投げ縄】技能に関連した奥義を使うために持っている必要があります。'
        ],
        [
            'item_type_name' => 'くさび',
            'impact_range_id' => 24,
            'effect_time' => 'その他',
            'duration' => 'その他',
            'usable_count' => 10,
            'consumption_gp' => 10,
            'description' => '10個入りのくさびです。'
        ],
        [
            'item_type_name' => '小型ハンマー',
            'impact_range_id' => 24,
            'effect_time' => 'その他',
            'duration' => 'その他',
            'usable_count' => 繰り返し利用可能,
            'consumption_gp' => 10,
            'description' => 'くさびを打ったりするのに使えるハンマーです。'
        ],
        [
            'item_type_name' => '手鏡',
            'impact_range_id' => 24,
            'effect_time' => 'その他',
            'duration' => 'その他',
            'usable_count' => 繰り返し利用可能,
            'consumption_gp' => 100,
            'description' => '手鏡です。'
        ],
        [
            'item_type_name' => '羊皮紙',
            'impact_range_id' => 24,
            'effect_time' => 'その他',
            'duration' => 'その他',
            'usable_count' => 10,
            'consumption_gp' => 10,
            'description' => '10枚入りの羊皮紙です。'
        ],
        [
            'item_type_name' => '羽根ペン',
            'impact_range_id' => 24,
            'effect_time' => 'その他',
            'duration' => 'その他',
            'usable_count' => 繰り返し利用可能,
            'consumption_gp' => 10,
            'description' => '文字を書くための羽根ペンです。'
        ],
        [
            'item_type_name' => 'インク',
            'impact_range_id' => 24,
            'effect_time' => 'その他',
            'duration' => 'その他',
            'usable_count' => 10,
            'consumption_gp' => 10,
            'description' => '羽根ペンに付けて文字を書くためのインクです。'
        ],
        [
            'item_type_name' => 'シーフ用ツール',
            'impact_range_id' => 24,
            'effect_time' => 'その他',
            'duration' => 'その他',
            'usable_count' => 繰り返し利用可能,
            'consumption_gp' => 100,
            'description' => '鍵開け、罠解除に使用するツールセットです。これを持っていないと、鍵開け行為における【鍵開け】技能判定、罠解除行為における【罠】技能判定ができません。所持状況が〈オートミッション〉に影響する場合があります。'
        ],
        [
            'item_type_name' => '具体的な楽器名に書き換えてください',
            'impact_range_id' => 24,
            'effect_time' => 'その他',
            'duration' => 'その他',
            'usable_count' => 繰り返し利用可能,
            'consumption_gp' => 200,
            'description' => 'リュート、ハープ、フルートなどの楽器です。これを持っていないと、【楽器】技能判定を使っての楽器の演奏ができません。所持状況が〈オートミッション〉に影響する場合があります。'
        ],
        [
            'item_type_name' => '吹き矢筒',
            'impact_range_id' => 24,
            'effect_time' => 'その他',
            'duration' => 'その他',
            'usable_count' => 繰り返し利用可能,
            'consumption_gp' => 10,
            'description' => '吹き矢を吹き出すための筒です。【吹き矢】技能に関連した奥義を使うために持っている必要があります。'
        ],
        [
            'item_type_name' => '小網',
            'impact_range_id' => 24,
            'effect_time' => 'その他',
            'duration' => 'その他',
            'usable_count' => 1,
            'consumption_gp' => 30,
            'description' => '小さな網です。【投網】技能に関連した奥義を使うために持っている必要があります。'
        ],
        [
            'item_type_name' => '中網',
            'impact_range_id' => 24,
            'effect_time' => 'その他',
            'duration' => 'その他',
            'usable_count' => 1,
            'consumption_gp' => 60,
            'description' => '中ぐらいの網です。【投網】技能に関連した奥義を使うために持っている必要があります。'
        ],
        [
            'item_type_name' => '大網',
            'impact_range_id' => 24,
            'effect_time' => 'その他',
            'duration' => 'その他',
            'usable_count' => 1,
            'consumption_gp' => 90,
            'description' => '大きな網です。【投網】技能に関連した奥義を使うために持っている必要があります。'
        ],
        [
            'item_type_name' => 'キャンプ道具',
            'impact_range_id' => 24,
            'effect_time' => 'その他',
            'duration' => 'その他',
            'usable_count' => 繰り返し利用可能,
            'consumption_gp' => 100,
            'description' => '野営に使用するテント、鍋・包丁などの調理器具、食器などのセットです。これを持っていないと、野営行為における【野外活動】技能判定における【野外活動】技能判定ができません。所持状況が〈オートミッション〉に影響する場合があります。'
        ]
      ]);
    }
}
