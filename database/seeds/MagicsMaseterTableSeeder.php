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
            'magic_type_name' => '魔法防御',
            'magic_level' => 1,
            'range_type_id' => 10, //視界内
            'impact_range_id' => 5, //敵個体
            'impact_value' => 0,
            'impact_time_unit' => 22, //[魔力]分間（ターン）
            'consumption_point' => 1,
            'necessary_point' => 100
        ],
        [
            'magic_type_name' => '衝撃防護',
            'magic_level' => 1,
            'range_type_id' => 10, //視界内
            'impact_range_id' => 5, //敵個体
            'impact_value' => 0,
            'impact_time_unit' => 22, //[魔力]分間（ターン）
            'consumption_point' => 1,
            'necessary_point' => 100
        ],
        [
            'magic_type_name' => '炎熱防護',
            'magic_level' => 1,
            'range_type_id' => 10, //視界内
            'impact_range_id' => 5, //敵個体
            'impact_value' => 0,
            'impact_time_unit' => 22, //[魔力]分間（ターン）
            'consumption_point' => 1,
            'necessary_point' => 100
        ],
        [
            'magic_type_name' => '氷冷防護',
            'magic_level' => 1,
            'range_type_id' => 10, //視界内
            'impact_range_id' => 5, //敵個体
            'impact_value' => 0,
            'impact_time_unit' => 22, //[魔力]分間（ターン）
            'consumption_point' => 1,
            'necessary_point' => 100
        ],
        [
            'magic_type_name' => '雷電防護',
            'magic_level' => 1,
            'range_type_id' => 10, //視界内
            'impact_range_id' => 5, //敵個体
            'impact_value' => 0,
            'impact_time_unit' => 22, //[魔力]分間（ターン）
            'consumption_point' => 1,
            'necessary_point' => 100
        ],
        [
            'magic_type_name' => '催眠',
            'magic_level' => 1,
            'range_type_id' => 10, //視界内
            'impact_range_id' => 5, //敵個体
            'impact_value' => 0,
            'impact_time_unit' => 2, //一瞬
            'consumption_point' => 1,
            'necessary_point' => 100
        ],
        [
            'magic_type_name' => '魔法解除',
            'magic_level' => 1,
            'range_type_id' => 10, //視界内
            'impact_range_id' => 14, //一つの魔法作用対象
            'impact_value' => 0,
            'impact_time_unit' => 2, //一瞬
            'consumption_point' => 1,
            'necessary_point' => 100
        ],
        [
            'magic_type_name' => '着火',
            'magic_level' => 1,
            'range_type_id' => 15, //触れた部分
            'impact_range_id' =>  15, //触れた部分
            'impact_value' => 0,
            'impact_time_unit' => 2, //一瞬
            'consumption_point' => 1,
            'necessary_point' => 100
        ],
        [
            'magic_type_name' => '魔法感知',
            'magic_level' => 1,
            'range_type_id' => 10, //視界内
            'impact_range_id' => 8, //術者
            'impact_value' => 0,
            'impact_time_unit' => 2, //一瞬
            'consumption_point' => 1,
            'necessary_point' => 100
        ],
        [
            'magic_type_name' => '幻音',
            'magic_level' => 1,
            'range_type_id' => 10, //視界内
            'impact_range_id' => 20, //直径[魔力×2]mの球形空間
            'impact_value' => 0,
            'impact_time_unit' => 3, //精神集中の限り
            'consumption_point' => 1,
            'necessary_point' => 100
        ],
        [
            'magic_type_name' => '転倒',
            'magic_level' => 1,
            'range_type_id' => 10, //視界内
            'impact_range_id' => 5, //敵個体
            'impact_value' => 0,
            'impact_time_unit' => 2, //一瞬
            'consumption_point' => 1,
            'necessary_point' => 100
        ],
        [
            'magic_type_name' => '浄水',
            'magic_level' => 1,
            'range_type_id' => 10, //視界内
            'impact_range_id' => 22, //[魔力×2]リットルの水
            'impact_value' => 0,
            'impact_time_unit' => 2, //一瞬
            'consumption_point' => 1,
            'necessary_point' => 100
            ],
        [
            'magic_type_name' => '風操作',
            'magic_level' => 1,
            'range_type_id' => 10, //視界内
            'impact_range_id' => 22, //直径[魔力×2]mの円形空間
            'impact_value' => 0,
            'impact_time_unit' => 3, //精神集中の限り
            'consumption_point' => 1,
            'necessary_point' => 100
        ],
        [
            'magic_type_name' => '霧',
            'magic_level' => 1,
            'range_type_id' => 10, //視界内
            'impact_range_id' => 22, //直径[魔力×2]mの円形空間
            'impact_value' => 0,
            'impact_time_unit' => 32, //0
            'consumption_point' => 132, //[魔力÷2（端数切上げ）]時間
            'necessary_point' => 100
        ],
        [
            'magic_type_name' => '凍結',
            'magic_level' => 1,
            'range_type_id' => 10, //視界内
            'impact_range_id' => 22, //[魔力×2]リットルの水
            'impact_value' => 0,
            'impact_time_unit' => 2, //一瞬
            'consumption_point' => 1,
            'necessary_point' => 100
            ],
        [
            'magic_type_name' => '光明',
            'magic_level' => 1,
            'range_type_id' => 10, //視界内
            'impact_range_id' => 20, //直径[魔力×2]mの球形空間
            'impact_value' => 0,
            'impact_time_unit' => 32, //[魔力÷2（端数切上げ）]時間
            'consumption_point' => 1,
            'necessary_point' => 100
        ],
        [
            'magic_type_name' => '暗闇',
            'magic_level' => 1,
            'range_type_id' => 10, //視界内
            'impact_range_id' => 20, //直径[魔力×2]mの球形空間
            'impact_value' => 0,
            'impact_time_unit' => 32, //[魔力÷2（端数切上げ）]時間
            'consumption_point' => 1,
            'necessary_point' => 100
        ],
        [
            'magic_type_name' => '接触衝撃攻撃',
            'magic_level' => 1,
            'range_type_id' => 15, //触れた部分
            'impact_range_id' =>  5, //敵個体
            'impact_value' => 0,
            'impact_time_unit' => 2, //一瞬
            'consumption_point' => 1,
            'necessary_point' => 100
        ],
        [
            'magic_type_name' => '接触炎熱攻撃',
            'magic_level' => 1,
            'range_type_id' => 15, //触れた部分
            'impact_range_id' =>  5, //敵個体
            'impact_value' => 0,
            'impact_time_unit' => 2, //一瞬
            'consumption_point' => 1,
            'necessary_point' => 100
        ],
        [
            'magic_type_name' => '接触氷冷攻撃',
            'magic_level' => 1,
            'range_type_id' => 15, //触れた部分
            'impact_range_id' =>  5, //敵個体
            'impact_value' => 0,
            'impact_time_unit' => 2, //一瞬
            'consumption_point' => 1,
            'necessary_point' => 100
        ],
        [
            'magic_type_name' => '接触雷電攻撃',
            'magic_level' => 1,
            'range_type_id' => 15, //触れた部分
            'impact_range_id' =>  5, //敵個体
            'impact_value' => 0,
            'impact_time_unit' => 2, //一瞬
            'consumption_point' => 1,
            'necessary_point' => 100
        ],
        [
            'magic_type_name' => '個体衝撃攻撃', //敵個体
            'magic_level' => 2,
            'range_type_id' => 10, //視界内
            'impact_range_id' => 5, //敵個体
            'impact_value' => 0,
            'impact_time_unit' => 2, //一瞬
            'consumption_point' => 2,
            'necessary_point' => 200
        ],
        [
            'magic_type_name' => '個体炎熱攻撃', //敵個体
            'magic_level' => 2,
            'range_type_id' => 10, //視界内
            'impact_range_id' => 5, //敵個体
            'impact_value' => 0,
            'impact_time_unit' => 2, //一瞬
            'consumption_point' => 2,
            'necessary_point' => 200
        ],
        [
            'magic_type_name' => '個体氷冷攻撃', //敵個体
            'magic_level' => 2,
            'range_type_id' => 10, //視界内
            'impact_range_id' => 5, //敵個体
            'impact_value' => 0,
            'impact_time_unit' => 2, //一瞬
            'consumption_point' => 2,
            'necessary_point' => 200
        ],
        [
            'magic_type_name' => '個体雷電攻撃', //敵個体
            'magic_level' => 2,
            'range_type_id' => 10, //視界内
            'impact_range_id' => 5, //敵個体
            'impact_value' => 0,
            'impact_time_unit' => 2, //一瞬
            'consumption_point' => 2,
            'necessary_point' => 200
        ],
        [
            'magic_type_name' => '治癒',
            'magic_level' => 2,
            'range_type_id' => 10, //視界内
            'impact_range_id' => 5, //敵個体
            'impact_value' => 0,
            'impact_time_unit' => 2, //一瞬
            'consumption_point' => 2,
            'necessary_point' => 200
        ],
        [
            'magic_type_name' => '精神打撃',
            'magic_level' => 2,
            'range_type_id' => 10, //視界内
            'impact_range_id' => 5, //敵個体
            'impact_value' => 0,
            'impact_time_unit' => 2, //一瞬
            'consumption_point' => 2,
            'necessary_point' => 200
        ],
        [
            'magic_type_name' => '生命力感知',
            'magic_level' => 2,
            'range_type_id' => 10, //視界内
            'impact_range_id' => 8, //術者
            'impact_value' => 0,
            'impact_time_unit' => 2, //一瞬
            'consumption_point' => 2,
            'necessary_point' => 200
        ],
        [
            'magic_type_name' => '衝撃近接魔法武器',
            'magic_level' => 2,
            'range_type_id' => 8, //術者
            'impact_range_id' =>  8, //術者
            'impact_value' => 0,
            'impact_time_unit' => 23, //[魔力×2]分間（ターン）
            'consumption_point' => 2,
            'necessary_point' => 200
        ],
        [
            'magic_type_name' => '炎熱近接魔法武器',
            'magic_level' => 2,
            'range_type_id' => 8, //術者
            'impact_range_id' =>  8, //術者
            'impact_value' => 0,
            'impact_time_unit' => 23, //[魔力×2]分間（ターン）
            'consumption_point' => 2,
            'necessary_point' => 200
        ],
        [
            'magic_type_name' => '氷冷近接魔法武器',
            'magic_level' => 2,
            'range_type_id' => 8, //術者
            'impact_range_id' =>  8, //術者
            'impact_value' => 0,
            'impact_time_unit' => 23, //[魔力×2]分間（ターン）
            'consumption_point' => 2,
            'necessary_point' => 200
        ],
        [
            'magic_type_name' => '雷電近接魔法武器',
            'magic_level' => 2,
            'range_type_id' => 8, //術者
            'impact_range_id' =>  8, //術者
            'impact_value' => 0,
            'impact_time_unit' => 23, //[魔力×2]分間（ターン）
            'consumption_point' => 2,
            'necessary_point' => 200
        ],
        [
            'magic_type_name' => '衝撃遠隔魔法武器',
            'magic_level' => 2,
            'range_type_id' => 8, //術者
            'impact_range_id' =>  8, //術者
            'impact_value' => 0,
            'impact_time_unit' => 23, //[魔力×2]分間（ターン）
            'consumption_point' => 2,
            'necessary_point' => 200
        ],
        [
            'magic_type_name' => '炎熱遠隔魔法武器',
            'magic_level' => 2,
            'range_type_id' => 8, //術者
            'impact_range_id' =>  8, //術者
            'impact_value' => 0,
            'impact_time_unit' => 23, //[魔力×2]分間（ターン）
            'consumption_point' => 2,
            'necessary_point' => 200
        ],
        [
            'magic_type_name' => '氷冷遠隔魔法武器',
            'magic_level' => 2,
            'range_type_id' => 8, //術者
            'impact_range_id' =>  8, //術者
            'impact_value' => 0,
            'impact_time_unit' => 23, //[魔力×2]分間（ターン）
            'consumption_point' => 2,
            'necessary_point' => 200
        ],
        [
            'magic_type_name' => '雷電遠隔魔法武器',
            'magic_level' => 2,
            'range_type_id' => 8, //術者
            'impact_range_id' =>  8, //術者
            'impact_value' => 0,
            'impact_time_unit' => 23, //[魔力×2]分間（ターン）
            'consumption_point' => 2,
            'necessary_point' => 200
        ],
        [
            'magic_type_name' => '炎熱武器強化',
            'magic_level' => 3,
            'range_type_id' => 10, //視界内
            'impact_range_id' => 12, //一つの武器
            'impact_value' =>  0,
            'impact_time_unit' => 22, //[魔力]分間（ターン）
            'consumption_point' => 3,
            'necessary_point' => 400
        ],
        [
            'magic_type_name' => '氷冷武器強化',
            'magic_level' => 3,
            'range_type_id' => 10, //視界内
            'impact_range_id' => 12, //一つの武器
            'impact_value' =>  0,
            'impact_time_unit' => 22, //[魔力]分間（ターン）
            'consumption_point' => 3,
            'necessary_point' => 400
        ],
        [
            'magic_type_name' => '雷電武器強化',
            'magic_level' => 3,
            'range_type_id' => 10, //視界内
            'impact_range_id' => 12, //一つの武器
            'impact_value' =>  0,
            'impact_time_unit' => 22, //[魔力]分間（ターン）
            'consumption_point' => 3,
            'necessary_point' => 400
        ],
        [
            'magic_type_name' => '聴力奪取',
            'magic_level' => 3,
            'range_type_id' => 10, //視界内
            'impact_range_id' => 5, //敵個体
            'impact_value' => 0,
            'impact_time_unit' => 22, //[魔力]分間（ターン）
            'consumption_point' => 3,
            'necessary_point' => 400
        ],
        [
            'magic_type_name' => '視力奪取',
            'magic_level' => 3,
            'range_type_id' => 10, //視界内
            'impact_range_id' => 5, //敵個体
            'impact_value' => 0,
            'impact_time_unit' => 22, //[魔力]分間（ターン）
            'consumption_point' => 3,
            'necessary_point' => 400
        ],
        [
            'magic_type_name' => '跳躍',
            'magic_level' => 3,
            'range_type_id' => 8, //術者
            'impact_range_id' =>  8, //術者
            'impact_value' => 0,
            'impact_time_unit' => 2, //一瞬
            'consumption_point' => 3,
            'necessary_point' => 400
        ],
        [
            'magic_type_name' => '気絶',
            'magic_level' => 3,
            'range_type_id' => 10, //視界内
            'impact_range_id' => 5, //敵個体
            'impact_value' => 0,
            'impact_time_unit' => 2, //一瞬
            'consumption_point' => 3,
            'necessary_point' => 400
        ],
        [
            'magic_type_name' => '抵抗向上',
            'magic_level' => 3,
            'range_type_id' => 10, //視界内
            'impact_range_id' => 5, //敵個体
            'impact_value' => 0,
            'impact_time_unit' => 22, //[魔力]分間（ターン）
            'consumption_point' => 3,
            'necessary_point' => 400
        ],
        [
            'magic_type_name' => '霊力感知',
            'magic_level' => 3,
            'range_type_id' => 10, //視界内
            'impact_range_id' => 8, //術者
            'impact_value' => 0,
            'impact_time_unit' => 2, //一瞬
            'consumption_point' => 3,
            'necessary_point' => 400
        ],
        [
            'magic_type_name' => '幻影',
            'magic_level' => 3,
            'range_type_id' => 10, //視界内
            'impact_range_id' => 20, //直径[魔力×2]mの球形空間
            'impact_value' => 0,
            'impact_time_unit' => 32, //[魔力÷2（端数切上げ）]時間
            'consumption_point' => 3,
            'necessary_point' => 400
        ],
        [
            'magic_type_name' => '器用向上',
            'magic_level' => 3,
            'range_type_id' => 10, //視界内
            'impact_range_id' => 5, //敵個体
            'impact_value' => 0,
            'impact_time_unit' => 22, //[魔力]分間（ターン）
            'consumption_point' => 3,
            'necessary_point' => 400
        ],
        [
            'magic_type_name' => '器用低下',
            'magic_level' => 3,
            'range_type_id' => 10, //視界内
            'impact_range_id' => 5, //敵個体
            'impact_value' => 0,
            'impact_time_unit' => 22, //[魔力]分間（ターン）
            'consumption_point' => 3,
            'necessary_point' => 400
        ],
        [
            'magic_type_name' => '筋力向上',
            'magic_level' => 3,
            'range_type_id' => 10, //視界内
            'impact_range_id' => 5, //敵個体
            'impact_value' => 0,
            'impact_time_unit' => 22, //[魔力]分間（ターン）
            'consumption_point' => 3,
            'necessary_point' => 400
        ],
        [
            'magic_type_name' => '筋力低下',
            'magic_level' => 3,
            'range_type_id' => 10, //視界内
            'impact_range_id' => 5, //敵個体
            'impact_value' => 0,
            'impact_time_unit' => 22, //[魔力]分間（ターン）
            'consumption_point' => 3,
            'necessary_point' => 400
        ],
        [
            'magic_type_name' => '敏捷向上',
            'magic_level' => 3,
            'range_type_id' => 10, //視界内
            'impact_range_id' => 5, //敵個体
            'impact_value' => 0,
            'impact_time_unit' => 22, //[魔力]分間（ターン）
            'consumption_point' => 3,
            'necessary_point' => 400
        ],
        [
            'magic_type_name' => '敏捷低下',
            'magic_level' => 3,
            'range_type_id' => 10, //視界内
            'impact_range_id' => 5, //敵個体
            'impact_value' => 0,
            'impact_time_unit' => 22, //[魔力]分間（ターン）
            'consumption_point' => 3,
            'necessary_point' => 400
        ],
        [
            'magic_type_name' => '浮揚',
            'magic_level' => 3,
            'range_type_id' => 8, //術者
            'impact_range_id' =>  8, //術者
            'impact_value' => 0,
            'impact_time_unit' => 22, //[魔力]分間（ターン）
            'consumption_point' => 3,
            'necessary_point' => 400
        ],
        [
            'magic_type_name' => '透明化',
            'magic_level' => 3,
            'range_type_id' => 8, //術者
            'impact_range_id' =>  8, //術者
            'impact_value' => 0,
            'impact_time_unit' => 3, //精神集中の限り
            'consumption_point' => 3,
            'necessary_point' => 400
        ],
        [
            'magic_type_name' => '水中呼吸',
            'magic_level' => 3,
            'range_type_id' => 10, //視界内
            'impact_range_id' => 5, //敵個体
            'impact_value' => 0,
            'impact_time_unit' => 32, //[魔力÷2（端数切上げ）]時間
            'consumption_point' => 3,
            'necessary_point' => 400
        ],
        [
            'magic_type_name' => '消音',
            'magic_level' => 3,
            'range_type_id' => 10, //視界内
            'impact_range_id' => 5, //敵個体
            'impact_value' => 0,
            'impact_time_unit' => 22, //[魔力]分間（ターン）
            'consumption_point' => 3,
            'necessary_point' => 400
        ],
        [
            'magic_type_name' => '沈黙',
            'magic_level' => 3,
            'range_type_id' => 10, //視界内
            'impact_range_id' => 5, //敵個体
            'impact_value' => 0,
            'impact_time_unit' => 22, //[魔力]分間（ターン）
            'consumption_point' => 3,
            'necessary_point' => 400
        ],
        [
            'magic_type_name' => '解毒',
            'magic_level' => 3,
            'range_type_id' => 10, //視界内
            'impact_range_id' => 5, //敵個体
            'impact_value' => 0,
            'impact_time_unit' => 2, //一瞬
            'consumption_point' => 3,
            'necessary_point' => 400
        ],
        [
            'magic_type_name' => '魔法封印',
            'magic_level' => 3,
            'range_type_id' => 10, //視界内
            'impact_range_id' => 5, //敵個体
            'impact_value' => 0,
            'impact_time_unit' => 22, //[魔力]分間（ターン）
            'consumption_point' => 3,
            'necessary_point' => 400
        ],
        [
            'magic_type_name' => '生命毒',
            'magic_level' => 3,
            'range_type_id' => 10, //視界内
            'impact_range_id' => 5, //敵個体
            'impact_value' => 0,
            'impact_time_unit' => 2, //一瞬
            'consumption_point' => 3,
            'necessary_point' => 400
        ],
        [
            'magic_type_name' => '乱射衝撃攻撃',
            'magic_level' => 3,
            'range_type_id' => 10, //視界内
            'impact_range_id' => 7, //敵全体
            'impact_value' => 0,
            'impact_time_unit' => 2, //一瞬
            'consumption_point' => 3,
            'necessary_point' => 400
        ],
        [
            'magic_type_name' => '乱射炎熱攻撃',
            'magic_level' => 3,
            'range_type_id' => 10, //視界内
            'impact_range_id' => 7, //敵全体
            'impact_value' => 0,
            'impact_time_unit' => 2, //一瞬
            'consumption_point' => 3,
            'necessary_point' => 400
        ],
        [
            'magic_type_name' => '乱射氷冷攻撃',
            'magic_level' => 3,
            'range_type_id' => 10, //視界内
            'impact_range_id' => 7, //敵全体
            'impact_value' => 0,
            'impact_time_unit' => 2, //一瞬
            'consumption_point' => 3,
            'necessary_point' => 400
        ],
        [
            'magic_type_name' => '乱射雷電攻撃',
            'magic_level' => 3,
            'range_type_id' => 10, //視界内
            'impact_range_id' => 7, //敵全体
            'impact_value' => 0,
            'impact_time_unit' => 2, //一瞬
            'consumption_point' => 3,
            'necessary_point' => 400
        ],
        [
            'magic_type_name' => '全体衝撃攻撃',
            'magic_level' => 4,
            'range_type_id' => 10, //視界内
            'impact_range_id' => 7, //敵全体
            'impact_value' => 0,
            'impact_time_unit' => 2, //一瞬
            'consumption_point' => 4,
            'necessary_point' => 800
        ],
        [
            'magic_type_name' => '全体炎熱攻撃',
            'magic_level' => 4,
            'range_type_id' => 10, //視界内
            'impact_range_id' => 7, //敵全体
            'impact_value' => 0,
            'impact_time_unit' => 2, //一瞬
            'consumption_point' => 4,
            'necessary_point' => 800
        ],
        [
            'magic_type_name' => '全体氷冷攻撃',
            'magic_level' => 4,
            'range_type_id' => 10, //視界内
            'impact_range_id' => 7, //敵全体
            'impact_value' => 0,
            'impact_time_unit' => 2, //一瞬
            'consumption_point' => 4,
            'necessary_point' => 800
        ],
        [
            'magic_type_name' => '全体雷電攻撃',
            'magic_level' => 4,
            'range_type_id' => 10, //視界内
            'impact_range_id' => 7, //敵全体
            'impact_value' => 0,
            'impact_time_unit' => 2, //一瞬
            'consumption_point' => 4,
            'necessary_point' => 800
        ],
        [
            'magic_type_name' => '分身',
            'magic_level' => 4,
            'range_type_id' => 8, //術者
            'impact_range_id' =>  8, //術者
            'impact_value' => 0,
            'impact_time_unit' => 22, //[魔力]分間（ターン）
            'consumption_point' => 4,
            'necessary_point' => 800
        ],
        [
            'magic_type_name' => '停止',
            'magic_level' => 4,
            'range_type_id' => 10, //視界内
            'impact_range_id' => 5, //敵個体
            'impact_value' => 24, //[魔力÷5（端数切上げ）]分間（ターン）
            'impact_time_unit' => ,
            'consumption_point' => 8,
            'necessary_point' => 800
        ],
        [
            'magic_type_name' => '水上歩行',
            'magic_level' => 4,
            'range_type_id' => 10, //視界内
            'impact_range_id' => 5, //敵個体
            'impact_value' => 0,
            'impact_time_unit' => 32, //[魔力÷2（端数切上げ）]時間
            'consumption_point' => 4,
            'necessary_point' => 800
        ],
        [
            'magic_type_name' => '洞穴',
            'magic_level' => 4,
            'range_type_id' => 10, //視界内
            'impact_range_id' => 21, //直径[魔力÷6（端数切上げ）]m、長さ[魔力×2]m
            'impact_value' => 0,
            'impact_time_unit' => 22, //[魔力]分間（ターン）
            'consumption_point' => 4,
            'necessary_point' => 800
        ],
        [
            'magic_type_name' => '生命力吸収',
            'magic_level' => 4,
            'range_type_id' => 10, //視界内
            'impact_range_id' => 5, //敵個体
            'impact_value' => 0,
            'impact_time_unit' => 2, //一瞬
            'consumption_point' => 4,
            'necessary_point' => 800
        ],
        [
            'magic_type_name' => '石化解除',
            'magic_level' => 4,
            'range_type_id' => 10, //視界内
            'impact_range_id' => 5, //敵個体
            'impact_value' => 0,
            'impact_time_unit' => 2, //一瞬
            'consumption_point' => 4,
            'necessary_point' => 800
        ],
        [
            'magic_type_name' => '大治癒',
            'magic_level' => 4,
            'range_type_id' => 10, //視界内
            'impact_range_id' => 5, //敵個体
            'impact_value' => 0,
            'impact_time_unit' => 2, //一瞬
            'consumption_point' => 4,
            'necessary_point' => 800
        ],
        [
            'magic_type_name' => '幻覚',
            'magic_level' => 5,
            'range_type_id' => 10, //視界内
            'impact_range_id' => 20, //直径[魔力×2]mの球形空間
            'impact_value' => 0,
            'impact_time_unit' => 32, //[魔力÷2（端数切上げ）]時間
            'consumption_point' => 5,
            'necessary_point' => 1500
        ],
        [
            'magic_type_name' => '千里眼',
            'magic_level' => 5,
            'range_type_id' => 8, //術者
            'impact_range_id' =>  8, //術者
            'impact_value' => 0,
            'impact_time_unit' => 3, //精神集中の限り
            'consumption_point' => 5,
            'necessary_point' => 1500
        ],
        [
            'magic_type_name' => '飛行',
            'magic_level' => 5,
            'range_type_id' => 8, //術者
            'impact_range_id' =>  8, //術者
            'impact_value' => 0,
            'impact_time_unit' => 3, //精神集中の限り
            'consumption_point' => 5,
            'necessary_point' => 1500
        ],
        [
            'magic_type_name' => '戦闘力向上',
            'magic_level' => 5,
            'range_type_id' => 10, //視界内
            'impact_range_id' => 5, //敵個体
            'impact_value' => 0,
            'impact_time_unit' => 22, //[魔力]分間（ターン）
            'consumption_point' => 5,
            'necessary_point' => 1500
        ],
        [
            'magic_type_name' => '念話',
            'magic_level' => 5,
            'range_type_id' => 11,
            'impact_range_id' =>  5, //敵個体
            'impact_value' => 0,
            'impact_time_unit' => 12, //[魔力×2]秒間
            'consumption_point' => 5,
            'necessary_point' => 1500
        ],
        [
            'magic_type_name' => '地中潜行',
            'magic_level' => 5,
            'range_type_id' => 8, //術者
            'impact_range_id' =>  8, //術者
            'impact_value' => 0,
            'impact_time_unit' => 3, //精神集中の限り
            'consumption_point' => 5,
            'necessary_point' => 1500
        ],
        [
            'magic_type_name' => '魔法解析',
            'magic_level' => 5,
            'range_type_id' => 10, //視界内
            'impact_range_id' => 13, //一つの物体
            'impact_value' => 0,
            'impact_time_unit' => 2, //一瞬
            'consumption_point' => 1,
            'necessary_point' => 0  1500
        ],
        [
            'magic_type_name' => '透視',
            'magic_level' => 5,
            'range_type_id' => 8, //術者
            'impact_range_id' =>  8, //術者
            'impact_value' => 0,
            'impact_time_unit' => 3, //精神集中の限り
            'consumption_point' => 5,
            'necessary_point' => 1500
        ],
        [
            'magic_type_name' => '生命猛毒',
            'magic_level' => 5,
            'range_type_id' => 10, //視界内
            'impact_range_id' => 5, //敵個体
            'impact_value' => 0,
            'impact_time_unit' => 2, //一瞬
            'consumption_point' => 5,
            'necessary_point' => 1500
        ],
        [
            'magic_type_name' => '石壁',
            'magic_level' => 5,
            'range_type_id' => 10, //視界内
            'impact_range_id' => 17, //幅[魔力×2]m×高さ[魔力÷4（端数切上げ）]m×厚さ[魔力÷10]m
            'impact_value' => 0,
            'impact_time_unit' => 32, //[魔力÷2（端数切上げ）]時間
            'consumption_point' => 5,
            'necessary_point' => 1500
        ],
        [
            'magic_type_name' => '水壁',
            'magic_level' => 5,
            'range_type_id' => 10, //視界内
            'impact_range_id' => 17, //幅[魔力×2]m×高さ[魔力÷4（端数切上げ）]m×厚さ[魔力÷10]m
            'impact_value' => 0,
            'impact_time_unit' => 32, //[魔力÷2（端数切上げ）]時間
            'consumption_point' => 5,
            'necessary_point' => 1500
        ],
        [
            'magic_type_name' => '炎壁',
            'magic_level' => 5,
            'range_type_id' => 10, //視界内
            'impact_range_id' => 17, //幅[魔力×2]m×高さ[魔力÷4（端数切上げ）]m×厚さ[魔力÷10]m
            'impact_value' => 0,
            'impact_time_unit' => 32, //[魔力÷2（端数切上げ）]時間
            'consumption_point' => 5,
            'necessary_point' => 1500
        ],
        [
            'magic_type_name' => '氷壁',
            'magic_level' => 5,
            'range_type_id' => 10, //視界内
            'impact_range_id' => 17, //幅[魔力×2]m×高さ[魔力÷4（端数切上げ）]m×厚さ[魔力÷10]m
            'impact_value' => 0,
            'impact_time_unit' => 32, //[魔力÷2（端数切上げ）]時間
            'consumption_point' => 5,
            'necessary_point' => 1500
        ],
        [
            'magic_type_name' => '念力',
            'magic_level' => 6,
            'range_type_id' => 10, //視界内
            'impact_range_id' => 23, //重さ[魔力÷2（端数切上げ）]×100グラムまでの物体
            'impact_value' => 0,
            'impact_time_unit' => 3, //精神集中の限り
            'consumption_point' => 6,
            'necessary_point' => 2700
        ],
        [
            'magic_type_name' => '瞬間移動',
            'magic_level' => 6,
            'range_type_id' => 8, //術者
            'impact_range_id' =>  8, //術者
            'impact_value' => 0,
            'impact_time_unit' => 2, //一瞬
            'consumption_point' => 18,
            'necessary_point' => 2700
        ],
        [
            'magic_type_name' => '再生',
            'magic_level' => 6,
            'range_type_id' => 15, //触れた部分
            'impact_range_id' =>  5, //敵個体
            'impact_value' => 1,
            'impact_time_unit' => 41, //週間
            'consumption_point' => 30,
            'necessary_point' => 2700
        ],
        [
            'magic_type_name' => '仮死',
            'magic_level' => 6,
            'range_type_id' => 15, //触れた部分
            'impact_range_id' =>  5, //敵個体
            'impact_value' => 4, //永続
            'impact_time_unit' => ,
            'consumption_point' => 12,
            'necessary_point' => 2700
        ],
        [
            'magic_type_name' => '衝撃障壁',
            'magic_level' => 7,
            'range_type_id' => 8, //術者
            'impact_range_id' =>  8, //術者
            'impact_value' => 0,
            'impact_time_unit' => 22, //[魔力]分間（ターン）
            'consumption_point' => 21,
            'necessary_point' => 4900
        ],
        [
            'magic_type_name' => '流水操作',
            'magic_level' => 7,
            'range_type_id' => 10, //視界内
            'impact_range_id' => 18, //[魔力×2]mの円形水域
            'impact_value' => 0,
            'impact_time_unit' => 3, //精神集中の限り
            'consumption_point' => 2,
            'necessary_point' => 1  4900
        ],
        [
            'magic_type_name' => '地震',
            'magic_level' => 7,
            'range_type_id' => 10, //視界内
            'impact_range_id' => 7, //敵全体
            'impact_value' => 0,
            'impact_time_unit' => 2, //一瞬
            'consumption_point' => 1,
            'necessary_point' => 4  4900
        ],
        [
            'magic_type_name' => '麻痺毒',
            'magic_level' => 7,
            'range_type_id' => 10, //視界内
            'impact_range_id' => 5, //敵個体
            'impact_value' => 0,
            'impact_time_unit' => 2, //一瞬
            'consumption_point' => 2,
            'necessary_point' => 1  4900
        ],
        [
            'magic_type_name' => '天候操作',
            'magic_level' => 7,
            'range_type_id' => 8, //術者
            'impact_range_id' =>  9, //術者を中心とした直径[魔力×50]mの地域
            'impact_value' => 0,
            'impact_time_unit' => 32, //[魔力÷2（端数切上げ）]時間
            'consumption_point' => 2,
            'necessary_point' => 1  4900
        ],
        [
            'magic_type_name' => '石化',
            'magic_level' => 7,
            'range_type_id' => 10, //視界内
            'impact_range_id' => 5, //敵個体
            'impact_value' => 4, //永続
            'impact_time_unit' => ,
            'consumption_point' => 2,
            'necessary_point' => 1  4900
        ],
        [
            'magic_type_name' => '魔法障壁',
            'magic_level' => 7,
            'range_type_id' => 8, //術者
            'impact_range_id' =>  8, //術者
            'impact_value' => 0,
            'impact_time_unit' => 22, //[魔力]分間（ターン）
            'consumption_point' => 7,
            'necessary_point' => 4900
        ],
        [
            'magic_type_name' => '吹雪',
            'magic_level' => 7,
            'range_type_id' => 10, //視界内
            'impact_range_id' => 7, //敵全体
            'impact_value' => 0,
            'impact_time_unit' => 2, //一瞬
            'consumption_point' => 2,
            'necessary_point' => 1  4900
        ],
        [
            'magic_type_name' => '爆発',
            'magic_level' => 7,
            'range_type_id' => 10, //視界内
            'impact_range_id' => 7, //敵全体
            'impact_value' => 0,
            'impact_time_unit' => 2, //一瞬
            'consumption_point' => 2,
            'necessary_point' => 1  4900
        ],
        [
            'magic_type_name' => '竜巻',
            'magic_level' => 7,
            'range_type_id' => 10, //視界内
            'impact_range_id' => 7, //敵全体
            'impact_value' => 0,
            'impact_time_unit' => 2, //一瞬
            'consumption_point' => 2,
            'necessary_point' => 1  4900
        ],
      ]);
    }
}
