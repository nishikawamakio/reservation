<?php

use Illuminate\Database\Seeder;

class SkillsMasterTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('skills_master')->insert([
        [
          'id' => 1,
          'name' => '【動植物知識】技能:レベル1'
        ],
        [
          'id' => 2,
          'name' => '【吹き矢】技能:レベル1'
        ],
        [
          'id' => 3,
          'name' => '【忍び足】技能:レベル5'
        ],
        [
          'id' => 4,
          'name' => '【戦術】技能:レベル1'
        ],
        [
          'id' => 5,
          'name' => '【戦術】技能:レベル2'
        ],
        [
          'id' => 6,
          'name' => '【戦術】技能:レベル3'
        ],
        [
          'id' => 7,
          'name' => '【戦術】技能:レベル4'
        ],
        [
          'id' => 8,
          'name' => '【投げ縄】技能:レベル1'
        ],
        [
          'id' => 9,
          'name' => '【投げ縄】技能:レベル3'
        ],
        [
          'id' => 10,
          'name' => '【投げ縄】技能:レベル5'
        ],
        [
          'id' => 11,
          'name' => '【投網】技能:レベル3'
        ],
        [
          'id' => 12,
          'name' => '【投網】技能:レベル5'
        ],
        [
          'id' => 13,
          'name' => '【投網】技能:レベル7'
        ],
        [
          'id' => 14,
          'name' => '【指揮】技能:レベル3'
        ],
        [
          'id' => 15,
          'name' => '【指揮】技能:レベル5'
        ],
        [
          'id' => 16,
          'name' => '【指揮】技能:レベル7'
        ],
        [
          'id' => 17,
          'name' => '【格闘】技能:レベル1'
        ],
        [
          'id' => 18,
          'name' => '【格闘】技能:レベル2'
        ],
        [
          'id' => 19,
          'name' => '【格闘】技能:レベル3'
        ],
        [
          'id' => 20,
          'name' => '【格闘】技能:レベル4'
        ],
        [
          'id' => 21,
          'name' => '【格闘】技能:レベル5'
        ],
        [
          'id' => 22,
          'name' => '【格闘】技能:レベル6'
        ],
        [
          'id' => 23,
          'name' => '【格闘】技能:レベル7'
        ],
        [
          'id' => 24,
          'name' => '【毒物】技能:レベル3'
        ],
        [
          'id' => 25,
          'name' => '【毒物】技能:レベル5'
        ],
        [
          'id' => 26,
          'name' => '【毒物】技能:レベル6'
        ],
        [
          'id' => 27,
          'name' => '【火薬銃】技能:レベル1'
        ],
        [
          'id' => 28,
          'name' => '【火薬銃】技能:レベル2'
        ],
        [
          'id' => 29,
          'name' => '【火薬銃】技能:レベル3'
        ],
        [
          'id' => 30,
          'name' => '【火薬銃】技能:レベル4'
        ],
        [
          'id' => 31,
          'name' => '【火薬銃】技能:レベル5'
        ],
        [
          'id' => 32,
          'name' => '【火薬銃】技能:レベル6'
        ],
        [
          'id' => 33,
          'name' => '【火薬銃】技能:レベル7'
        ],
        [
          'id' => 34,
          'name' => '【近接武器攻撃】技能:レベル1'
        ],
        [
          'id' => 35,
          'name' => '【近接武器攻撃】技能:レベル2'
        ],
        [
          'id' => 36,
          'name' => '【近接武器攻撃】技能:レベル3'
        ],
        [
          'id' => 37,
          'name' => '【近接武器攻撃】技能:レベル4'
        ],
        [
          'id' => 38,
          'name' => '【近接武器攻撃】技能:レベル5'
        ],
        [
          'id' => 39,
          'name' => '【近接武器攻撃】技能:レベル6'
        ],
        [
          'id' => 40,
          'name' => '【近接武器攻撃】技能:レベル7'
        ],
        [
          'id' => 41,
          'name' => '【遠隔武器攻撃（火薬銃以外）】技能:レベル1'
        ],
        [
          'id' => 42,
          'name' => '【遠隔武器攻撃（火薬銃以外）】技能:レベル2'
        ],
        [
          'id' => 43,
          'name' => '【遠隔武器攻撃（火薬銃以外）】技能:レベル3'
        ],
        [
          'id' => 44,
          'name' => '【遠隔武器攻撃（火薬銃以外）】技能:レベル4'
        ],
        [
          'id' => 45,
          'name' => '【遠隔武器攻撃（火薬銃以外）】技能:レベル5'
        ],
        [
          'id' => 46,
          'name' => '【遠隔武器攻撃（火薬銃以外）】技能:レベル6'
        ],
        [
          'id' => 47,
          'name' => '【遠隔武器攻撃（火薬銃以外）】技能:レベル7'
        ],
        [
          'id' => 48,
          'name' => '【魔法基礎】技能:レベル3'
        ],
        [
          'id' => 49,
          'name' => '【魔法基礎】技能:レベル5'
        ],
        [
          'id' => 50,
          'name' => '【魔法基礎】技能:レベル7'
        ],
        [
          'id' => 51,
          'name' => '〔筋力〕:3以上'
        ],
        [
          'id' => 52,
          'name' => '〔筋力〕:4以上'
        ],
        [
          'id' => 53,
          'name' => '〔筋力〕:6以上'
        ],
        [
          'id' => 54,
          'name' => '特性「飛行」保持'
        ],
        [
          'id' => 55,
          'name' => '魔法種別『分身』修得済み'
        ],
        [
          'id' => 56,
          'name' => '魔法種別『接触氷冷攻撃』修得済み'
        ],
        [
          'id' => 57,
          'name' => '魔法種別『接触炎熱攻撃』修得済み'
        ],
        [
          'id' => 58,
          'name' => '魔法種別『接触衝撃攻撃』修得済み'
        ],
        [
          'id' => 59,
          'name' => '魔法種別『接触雷電攻撃』修得済み'
        ],
        [
          'id' => 60,
          'name' => '魔法種別『暗闇』修得済み'
        ],
        [
          'id' => 61,
          'name' => '魔法種別『跳躍』修得済み'
        ],
        [
          'id' => 62,
          'name' => '魔法種別『霧』修得済み'
        ],
        [
          'id' => 63,
          'name' => '魔法種別『風操作』修得済み'
        ]
      ]);
    }
}
