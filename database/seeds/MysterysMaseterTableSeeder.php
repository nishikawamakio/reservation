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
            'mysterys_type_name' => '足払い',
            'range_type_id' => 3, // 近接攻撃
            'impact_range_id' => 1, // 個体
            'prerequisites_type' => 1, // 【格闘】技能:レベル1
            'consumption_point' => 0,
            'consumption_ster_point' => 0,
            'necessary_point' => 100,
            'description' => '奥義が命中した相手を転倒させます。命中判定は1回のみ行います。重たいモンスター、巨体なモンスターなど、命中した後に〔筋力〕での能力判定による特定の目標値達成が必要なモンスターが居ます。',
        ],
        [
            'mysterys_type_name' => 'パリィ',
            'range_type_id' => 4, // 防御
            'impact_range_id' => 5, // 自分自身
            'prerequisites_type' => 2, // 【近接武器攻撃】技能:レベル1
            'consumption_point' => 0,
            'consumption_ster_point' => 0,
            'necessary_point' => 100,
            'description' => '通常の回避専念［〔敏捷〕＋【回避】技能レベル－防具回避力修正＋2］の代わりに、[〔敏捷〕＋【近接武器攻撃】技能レベル＋4］（防具回避力修正の影響を受けません）で回避専念を行います。ただし、「魔法」、「モンスター行動の全体攻撃」、「攻撃以外のモンスター行動」に対しては通常の回避を行います。',
        ],
        [
            'mysterys_type_name' => '気合溜め',
            'range_type_id' => 5, // 特殊
            'impact_range_id' => 5, // 自分自身
            'prerequisites_type' => 3, // 【戦術】技能:レベル1
            'consumption_point' => 0,
            'consumption_ster_point' => 0,
            'necessary_point' => 100,
            'description' => '自分自身のFSを1～4増やします。',
        ],
        [
            'mysterys_type_name' => '引き倒し   ',
            'range_type_id' => 6, // 遠隔攻撃
            'impact_range_id' => 1, // 個体
            'prerequisites_type' => 4, // 【投げ縄】技能:レベル1,〔筋力〕:3以上
            'consumption_point' => 0,
            'consumption_ster_point' => 0,
            'necessary_point' => 100,
            'description' => '相手に縄を引き掛け、奥義が命中した相手を転倒させます。命中判定は[〔敏捷〕＋〔筋力〕＋【投げ縄】技能レベル－2］で行います。道具として「ロープ」を所持している必要があります。',
        ]
      ]);
    }
}
