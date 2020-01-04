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
            'range_type_id' => 1,
            'impact_range_id' => 5,
            'prerequisites_type' => 17,
            'necessary_point' => 100,
            'consumption_fs' => 0,
            'consumption_mp' => 0,
            'consumption_star' => 0,
            'description' => '奥義が命中した相手を転倒させます。命中判定は1回のみ行います。重たいモンスター、巨体なモンスターなど、命中した後に〔筋力〕での能力判定による特定の目標値達成が必要なモンスターが居ます。'
        ],
        [
            'mysterys_type_name' => 'キック',
            'range_type_id' => 1,
            'impact_range_id' => 5,
            'prerequisites_type' => 17,
            'necessary_point' => 100,
            'consumption_fs' => 0,
            'consumption_mp' => 0,
            'consumption_star' => 0,
            'description' => '武器装備を解除することなく、【格闘】技能で蹴りによる通常攻撃をすることができます。ただし、－1の命中力修正が発生します。'
        ],
        [
            'mysterys_type_name' => 'パリィ',
            'range_type_id' => 3,
            'impact_range_id' => 3,
            'prerequisites_type' => 34,
            'necessary_point' => 100,
            'consumption_fs' => 0,
            'consumption_mp' => 0,
            'consumption_star' => 0,
            'description' => '通常の回避専念［〔敏捷〕＋【回避】技能レベル－防具回避力修正＋2］の代わりに、[〔敏捷〕＋【近接武器攻撃】技能レベル＋4］（防具回避力修正の影響を受けません）で回避専念を行います。ただし、「魔法」、「モンスター行動の全体攻撃」、「攻撃以外のモンスター行動」に対しては通常の回避を行います。'
        ],
        [
            'mysterys_type_name' => '気合溜め'
            'range_type_id' => 4,
            'impact_range_id' => 3,
            'prerequisites_type' => 4,
            'necessary_point' => 100,
            'consumption_fs' => 0,
            'consumption_mp' => 0,
            'consumption_star' => 0,
            'description' => '自分自身のFSを1～4増やします。'
        ],
        [
            'mysterys_type_name' => '引き倒し',
            'range_type_id' => 2,
            'impact_range_id' => 5,
            'prerequisites_type' => 8,51,
            'necessary_point' => 100,
            'consumption_fs' => 1,
            'consumption_mp' => 0,
            'consumption_star' => 0,
            'description' => '相手に縄を引き掛け、奥義が命中した相手を転倒させます。命中判定は[〔敏捷〕＋〔筋力〕＋【投げ縄】技能レベル－2］で行います。道具として「ロープ」を所持している必要があります。'
        ],
        [
            'mysterys_type_name' => '挑発'
            'range_type_id' => 4,
            'impact_range_id' => 3,
            'prerequisites_type' => 4,
            'necessary_point' => 100,
            'consumption_fs' => 1,
            'consumption_mp' => 0,
            'consumption_star' => 0,
            'description' => '相手を挑発することで、［〔知力〕＋【戦術】技能レベル＋70］％の確率で自分に攻撃を向けさせます。感情を持たない者や、挑発されていることが分からないほど知性が低い者など、相手によっては効かないこともあります。次に自分の手番が回ってくるまでの間有効です。'
        ],
        [
            'mysterys_type_name' => '近接武器攻撃ヒットアンドアウェイ',
            'range_type_id' => 1,
            'impact_range_id' => 5,
            'prerequisites_type' => 4,34,
            'necessary_point' => 200,
            'consumption_fs' => 1,
            'consumption_mp' => 0,
            'consumption_star' => 0,
            'description' => '敵に通常攻撃をした後、回避専念状態になります。'
        ],
        [
            'mysterys_type_name' => '格闘ヒットアンドアウェイ',
            'range_type_id' => 1,
            'impact_range_id' => 5,
            'prerequisites_type' => 4,17,
            'necessary_point' => 200,
            'consumption_fs' => 1,
            'consumption_mp' => 0,
            'consumption_star' => 0,
            'description' => '敵に通常攻撃をした後、回避専念状態になります。'
        ],
        [
            'mysterys_type_name' => '近接武器攻撃ヒットアンドガード',
            'range_type_id' => 1,
            'impact_range_id' => 5,
            'prerequisites_type' => 4,34,
            'necessary_point' => 200,
            'consumption_fs' => 1,
            'consumption_mp' => 0,
            'consumption_star' => 0,
            'description' => '敵に通常攻撃をした後、防御専念状態になります。'
        ],
        [
            'mysterys_type_name' => '格闘ヒットアンドガード',
            'range_type_id' => 1,
            'impact_range_id' => 5,
            'prerequisites_type' => 4,17,
            'necessary_point' => 200,
            'consumption_fs' => 1,
            'consumption_mp' => 0,
            'consumption_star' => 0,
            'description' => '敵に通常攻撃をした後、防御専念状態になります。'
        ],
        [
            'mysterys_type_name' => '幻霧撃',
            'range_type_id' => 1,
            'impact_range_id' => 5,
            'prerequisites_type' => 34,62,
            'necessary_point' => 200,
            'consumption_fs' => 1,
            'consumption_mp' => 1,
            'consumption_star' => 0,
            'description' => '相手を霧で包み込むことで視界を遮り回避力を－2した状態で、近接攻撃を仕掛けます。'
        ],
        [
            'mysterys_type_name' => '幻霧拳',
            'range_type_id' => 1,
            'impact_range_id' => 5,
            'prerequisites_type' => 17,62,
            'necessary_point' => 200,
            'consumption_fs' => 1,
            'consumption_mp' => 1,
            'consumption_star' => 0,
            'description' => '相手を霧で包み込むことで視界を遮り回避力を－2した状態で、近接攻撃を仕掛けます。'
        ],
        [
            'mysterys_type_name' => '幻霧射',
            'range_type_id' => 2,
            'impact_range_id' => 5,
            'prerequisites_type' => 41,62,
            'necessary_point' => 200,
            'consumption_fs' => 1,
            'consumption_mp' => 1,
            'consumption_star' => 0,
            'description' => '相手を霧で包み込むことで視界を遮り回避力を－2した状態で、遠隔攻撃を仕掛けます。'
        ],
        [
            'mysterys_type_name' => '幻霧弾',
            'range_type_id' => 2,
            'impact_range_id' => 5,
            'prerequisites_type' => 27,62,
            'necessary_point' => 200,
            'consumption_fs' => 1,
            'consumption_mp' => 1,
            'consumption_star' => 0,
            'description' => '相手を霧で包み込むことで視界を遮り回避力を－2した状態で、遠隔攻撃を仕掛けます。'
        ],
        [
            'mysterys_type_name' => 'ガン＝カタ',
            'range_type_id' => 1,
            'impact_range_id' => 5,
            'prerequisites_type' => 27,17,
            'necessary_point' => 100,
            'consumption_fs' => 0,
            'consumption_mp' => 0,
            'consumption_star' => 0,
            'description' => '火薬銃の装備を解除することなく、【格闘】技能で素手による通常攻撃をすることができます。'
        ],
        [
            'mysterys_type_name' => '近接武器攻撃命中力向上攻撃',
            'range_type_id' => 1,
            'impact_range_id' => 5,
            'prerequisites_type' => 35,
            'necessary_point' => 200,
            'consumption_fs' => 2,
            'consumption_mp' => 0,
            'consumption_star' => 0,
            'description' => '命中力を＋2にした状態で攻撃します。'
        ],
        [
            'mysterys_type_name' => '格闘命中力向上攻撃',
            'range_type_id' => 1,
            'impact_range_id' => 5,
            'prerequisites_type' => 18,
            'necessary_point' => 200,
            'consumption_fs' => 2,
            'consumption_mp' => 0,
            'consumption_star' => 0,
            'description' => '命中力を＋2にした状態で攻撃します。'
        ],
        [
            'mysterys_type_name' => '遠隔武器攻撃狙撃',
            'range_type_id' => 2,
            'impact_range_id' => 5,
            'prerequisites_type' => 42,
            'necessary_point' => 200,
            'consumption_fs' => 2,
            'consumption_mp' => 0,
            'consumption_star' => 0,
            'description' => '命中力を＋2にした状態で攻撃します。'
        ],
        [
            'mysterys_type_name' => '火薬銃狙撃',
            'range_type_id' => 2,
            'impact_range_id' => 5,
            'prerequisites_type' => 28,
            'necessary_point' => 200,
            'consumption_fs' => 2,
            'consumption_mp' => 0,
            'consumption_star' => 0,
            'description' => '命中力を＋2にした状態で攻撃します。'
        ],
        [
            'mysterys_type_name' => '近接武器攻撃ビーストクラッシュ',
            'range_type_id' => 1,
            'impact_range_id' => 5,
            'prerequisites_type' => 34,1,
            'necessary_point' => 200,
            'consumption_fs' => 1,
            'consumption_mp' => 0,
            'consumption_star' => 0,
            'description' => '動植物知識を生かし、獣系モンスターの弱点を考慮した攻撃を仕掛けることにより、攻撃力に【動植物知識】の技能レベルを加えることができます。獣系モンスター以外には通常攻撃と何ら変わりはありません。'
        ],
        [
            'mysterys_type_name' => '格闘ビーストクラッシュ',
            'range_type_id' => 1,
            'impact_range_id' => 5,
            'prerequisites_type' => 17,1,
            'necessary_point' => 200,
            'consumption_fs' => 1,
            'consumption_mp' => 0,
            'consumption_star' => 0,
            'description' => '動植物知識を生かし、獣系モンスターの弱点を考慮した攻撃を仕掛けることにより、攻撃力に【動植物知識】の技能レベルを加えることができます。獣系モンスター以外には通常攻撃と何ら変わりはありません。'
        ],
        [
            'mysterys_type_name' => '近接武器攻撃バードクラッシュ',
            'range_type_id' => 1,
            'impact_range_id' => 5,
            'prerequisites_type' => 34,1,
            'necessary_point' => 200,
            'consumption_fs' => 1,
            'consumption_mp' => 0,
            'consumption_star' => 0,
            'description' => '動植物知識を生かし、鳥系モンスターの弱点を考慮した攻撃を仕掛けることにより、攻撃力に【動植物知識】の技能レベルを加えることができます。鳥系モンスター以外には通常攻撃と何ら変わりはありません。'
        ],
        [
            'mysterys_type_name' => '格闘バードクラッシュ',
            'range_type_id' => 1,
            'impact_range_id' => 5,
            'prerequisites_type' => 17,1,
            'necessary_point' => 200,
            'consumption_fs' => 1,
            'consumption_mp' => 0,
            'consumption_star' => 0,
            'description' => '動植物知識を生かし、鳥系モンスターの弱点を考慮した攻撃を仕掛けることにより、攻撃力に【動植物知識】の技能レベルを加えることができます。鳥系モンスター以外には通常攻撃と何ら変わりはありません。'
        ],
        [
            'mysterys_type_name' => '近接武器攻撃フィッシュクラッシュ',
            'range_type_id' => 1,
            'impact_range_id' => 5,
            'prerequisites_type' => 34,1,
            'necessary_point' => 200,
            'consumption_fs' => 1,
            'consumption_mp' => 0,
            'consumption_star' => 0,
            'description' => '動植物知識を生かし、水棲生物系モンスターの弱点を考慮した攻撃を仕掛けることにより、攻撃力に【動植物知識】の技能レベルを加えることができます。水棲生物系モンスター以外には通常攻撃と何ら変わりはありません。'
        ],
        [
            'mysterys_type_name' => '格闘フィッシュクラッシュ',
            'range_type_id' => 1,
            'impact_range_id' => 5,
            'prerequisites_type' => 17,1,
            'necessary_point' => 200,
            'consumption_fs' => 1,
            'consumption_mp' => 0,
            'consumption_star' => 0,
            'description' => '動植物知識を生かし、水棲生物系モンスターの弱点を考慮した攻撃を仕掛けることにより、攻撃力に【動植物知識】の技能レベルを加えることができます。水棲生物系モンスター以外には通常攻撃と何ら変わりはありません。'
        ],
        [
            'mysterys_type_name' => '近接武器攻撃インセクトクラッシュ',
            'range_type_id' => 1,
            'impact_range_id' => 5,
            'prerequisites_type' => 34,1,
            'necessary_point' => 200,
            'consumption_fs' => 1,
            'consumption_mp' => 0,
            'consumption_star' => 0,
            'description' => '動植物知識を生かし、虫系モンスターの弱点を考慮した攻撃を仕掛けることにより、攻撃力に【動植物知識】の技能レベルを加えることができます。虫系モンスター以外には通常攻撃と何ら変わりはありません。'
        ],
        [
            'mysterys_type_name' => '格闘インセクトクラッシュ',
            'range_type_id' => 1,
            'impact_range_id' => 5,
            'prerequisites_type' => 17,1,
            'necessary_point' => 200,
            'consumption_fs' => 1,
            'consumption_mp' => 0,
            'consumption_star' => 0,
            'description' => '動植物知識を生かし、虫系モンスターの弱点を考慮した攻撃を仕掛けることにより、攻撃力に【動植物知識】の技能レベルを加えることができます。虫系モンスター以外には通常攻撃と何ら変わりはありません。'
        ],
        [
            'mysterys_type_name' => '近接武器攻撃プラントクラッシュ',
            'range_type_id' => 1,
            'impact_range_id' => 5,
            'prerequisites_type' => 34,1,
            'necessary_point' => 200,
            'consumption_fs' => 1,
            'consumption_mp' => 0,
            'consumption_star' => 0,
            'description' => '動植物知識を生かし、植物系モンスターの弱点を考慮した攻撃を仕掛けることにより、攻撃力に【動植物知識】の技能レベルを加えることができます。植物系モンスター以外には通常攻撃と何ら変わりはありません。'
        ],
        [
            'mysterys_type_name' => '格闘プラントクラッシュ',
            'range_type_id' => 1,
            'impact_range_id' => 5,
            'prerequisites_type' => 17,1,
            'necessary_point' => 200,
            'consumption_fs' => 1,
            'consumption_mp' => 0,
            'consumption_star' => 0,
            'description' => '動植物知識を生かし、植物系モンスターの弱点を考慮した攻撃を仕掛けることにより、攻撃力に【動植物知識】の技能レベルを加えることができます。植物系モンスター以外には通常攻撃と何ら変わりはありません。'
        ],
        [
            'mysterys_type_name' => '遠隔武器攻撃ビーストシュート',
            'range_type_id' => 2,
            'impact_range_id' => 5,
            'prerequisites_type' => 41,1,
            'necessary_point' => 200,
            'consumption_fs' => 1,
            'consumption_mp' => 0,
            'consumption_star' => 0,
            'description' => '動植物知識を生かし、獣系モンスターの弱点を考慮した攻撃を仕掛けることにより、攻撃力に【動植物知識】の技能レベルを加えることができます。獣系モンスター以外には通常攻撃と何ら変わりはありません。'
        ],
        [
            'mysterys_type_name' => '火薬銃ビーストシュート',
            'range_type_id' => 2,
            'impact_range_id' => 5,
            'prerequisites_type' => 27,1,
            'necessary_point' => 200,
            'consumption_fs' => 1,
            'consumption_mp' => 0,
            'consumption_star' => 0,
            'description' => '動植物知識を生かし、獣系モンスターの弱点を考慮した攻撃を仕掛けることにより、攻撃力に【動植物知識】の技能レベルを加えることができます。獣系モンスター以外には通常攻撃と何ら変わりはありません。'
        ],
        [
            'mysterys_type_name' => '遠隔武器攻撃バードシュート',
            'range_type_id' => 2,
            'impact_range_id' => 5,
            'prerequisites_type' => 41,1,
            'necessary_point' => 200,
            'consumption_fs' => 1,
            'consumption_mp' => 0,
            'consumption_star' => 0,
            'description' => '動植物知識を生かし、鳥系モンスターの弱点を考慮した攻撃を仕掛けることにより、攻撃力に【動植物知識】の技能レベルを加えることができます。鳥系モンスター以外には通常攻撃と何ら変わりはありません。'
        ],
        [
            'mysterys_type_name' => '火薬銃バードシュート',
            'range_type_id' => 2,
            'impact_range_id' => 5,
            'prerequisites_type' => 27,1,
            'necessary_point' => 200,
            'consumption_fs' => 1,
            'consumption_mp' => 0,
            'consumption_star' => 0,
            'description' => '動植物知識を生かし、鳥系モンスターの弱点を考慮した攻撃を仕掛けることにより、攻撃力に【動植物知識】の技能レベルを加えることができます。鳥系モンスター以外には通常攻撃と何ら変わりはありません。'
        ],
        [
            'mysterys_type_name' => '遠隔武器攻撃フィッシュシュート',
            'range_type_id' => 2,
            'impact_range_id' => 5,
            'prerequisites_type' => 41,1,
            'necessary_point' => 200,
            'consumption_fs' => 1,
            'consumption_mp' => 0,
            'consumption_star' => 0,
            'description' => '動植物知識を生かし、水棲生物系モンスターの弱点を考慮した攻撃を仕掛けることにより、攻撃力に【動植物知識】の技能レベルを加えることができます。水棲生物系モンスター以外には通常攻撃と何ら変わりはありません。'
        ],
        [
            'mysterys_type_name' => '火薬銃フィッシュシュート',
            'range_type_id' => 2,
            'impact_range_id' => 5,
            'prerequisites_type' => 27,1,
            'necessary_point' => 200,
            'consumption_fs' => 1,
            'consumption_mp' => 0,
            'consumption_star' => 0,
            'description' => '動植物知識を生かし、水棲生物系モンスターの弱点を考慮した攻撃を仕掛けることにより、攻撃力に【動植物知識】の技能レベルを加えることができます。水棲生物系モンスター以外には通常攻撃と何ら変わりはありません。'
        ],
        [
            'mysterys_type_name' => '遠隔武器攻撃インセクトシュート',
            'range_type_id' => 2,
            'impact_range_id' => 5,
            'prerequisites_type' => 41,1,
            'necessary_point' => 200,
            'consumption_fs' => 1,
            'consumption_mp' => 0,
            'consumption_star' => 0,
            'description' => '動植物知識を生かし、虫系モンスターの弱点を考慮した攻撃を仕掛けることにより、攻撃力に【動植物知識】の技能レベルを加えることができます。虫系モンスター以外には通常攻撃と何ら変わりはありません。'
        ],
        [
            'mysterys_type_name' => '火薬銃インセクトシュート',
            'range_type_id' => 2,
            'impact_range_id' => 5,
            'prerequisites_type' => 27,1,
            'necessary_point' => 200,
            'consumption_fs' => 1,
            'consumption_mp' => 0,
            'consumption_star' => 0,
            'description' => '動植物知識を生かし、虫系モンスターの弱点を考慮した攻撃を仕掛けることにより、攻撃力に【動植物知識】の技能レベルを加えることができます。虫系モンスター以外には通常攻撃と何ら変わりはありません。'
        ],
        [
            'mysterys_type_name' => '遠隔武器攻撃プラントシュート',
            'range_type_id' => 2,
            'impact_range_id' => 5,
            'prerequisites_type' => 41,1,
            'necessary_point' => 200,
            'consumption_fs' => 1,
            'consumption_mp' => 0,
            'consumption_star' => 0,
            'description' => '動植物知識を生かし、植物系モンスターの弱点を考慮した攻撃を仕掛けることにより、攻撃力に【動植物知識】の技能レベルを加えることができます。植物系モンスター以外には通常攻撃と何ら変わりはありません。'
        ],
        [
            'mysterys_type_name' => '火薬銃プラントシュート',
            'range_type_id' => 2,
            'impact_range_id' => 5,
            'prerequisites_type' => 27,1,
            'necessary_point' => 200,
            'consumption_fs' => 1,
            'consumption_mp' => 0,
            'consumption_star' => 0,
            'description' => '動植物知識を生かし、植物系モンスターの弱点を考慮した攻撃を仕掛けることにより、攻撃力に【動植物知識】の技能レベルを加えることができます。植物系モンスター以外には通常攻撃と何ら変わりはありません。'
        ],
        [
            'mysterys_type_name' => 'ウォークライ',
            'range_type_id' => 4,
            'impact_range_id' => 3,
            'prerequisites_type' => 5,
            'necessary_point' => 200,
            'consumption_fs' => 2,
            'consumption_mp' => 2,
            'consumption_star' => 0,
            'description' => '大声を上げ気合を入れることで、ランダムなターン数（4～7ターン）の間、攻撃力を＋3します。声を出す必要があるため、「消音」状態、「沈黙」状態では使用できません。'
        ],
        [
            'mysterys_type_name' => '飛び蹴り',
            'range_type_id' => 2,
            'impact_range_id' => 5,
            'prerequisites_type' => 18,
            'necessary_point' => 200,
            'consumption_fs' => 2,
            'consumption_mp' => 0,
            'consumption_star' => 0,
            'description' => '相手に飛び蹴りを仕掛けます。命中力が－4になる代わりに、攻撃力が1.5倍になり、さらに自分が後衛であれば、相手に攻撃が命中してもしなくても、前衛に移動します。命中判定は1回のみ行います。'
        ],
        [
            'mysterys_type_name' => '遠隔武器攻撃パトリオット',
            'range_type_id' => 3,
            'impact_range_id' => 3,
            'prerequisites_type' => 43,
            'necessary_point' => 400,
            'consumption_fs' => 0,
            'consumption_mp' => 0,
            'consumption_star' => 0,
            'description' => '遠隔攻撃、遠隔攻撃魔法、モンスター行動の遠隔攻撃に対して飛び道具をぶつけ、[〔敏捷〕＋〔筋力〕＋【遠隔武器攻撃（火薬銃以外）】技能レベル－1］で撃墜を試みます。撃墜に失敗した際でも、さらにもう一度通常の回避を行うことができます。ただし、「近接攻撃」、「全体攻撃魔法」、「モンスター行動の全体攻撃」、「攻撃以外のモンスター行動」に対しては通常の回避を行います。'
        ],
        [
            'mysterys_type_name' => '火薬銃パトリオット'
            'range_type_id' => 3,
            'impact_range_id' => 3,
            'prerequisites_type' => 29,
            'necessary_point' => 400,
            'consumption_fs' => 0,
            'consumption_mp' => 0,
            'consumption_star' => 0,
            'description' => '遠隔攻撃、遠隔攻撃魔法、モンスター行動の遠隔攻撃に対して飛び道具をぶつけ、[〔敏捷〕＋〔筋力〕＋【火薬銃】技能レベル－1］で撃墜を試みます。撃墜に失敗した際でも、さらにもう一度通常の回避を行うことができます。ただし、「近接攻撃」、「全体攻撃魔法」、「モンスター行動の全体攻撃」、「攻撃以外のモンスター行動」に対しては通常の回避を行います。'
        ],
        [
            'mysterys_type_name' => '鉄壁の布陣'
            'range_type_id' => 4,
            'impact_range_id' => 4,
            'prerequisites_type' => 14,
            'necessary_point' => 400,
            'consumption_fs' => 0,
            'consumption_mp' => 3,
            'consumption_star' => 0,
            'description' => '仲間を指揮し、防御に適した陣形を組むことで、戦闘が終了するまでの間、味方側全員の衝撃防御力を＋2します。声を出す必要があるため、「消音」状態、「沈黙」状態では使用できません。また、空中に居る者、地中に居る者、動けない者、声が聞こえない者は陣形に参加できません。陣形に参加中に空中に移動した者、地中に移動した者は陣形から外れます。他の布陣の陣形に移動すると、この布陣は解除されます。'
        ],
        [
            'mysterys_type_name' => 'エール',
            'range_type_id' => 4,
            'impact_range_id' => 4,
            'prerequisites_type' => 6,
            'necessary_point' => 400,
            'consumption_fs' => 0,
            'consumption_mp' => 3,
            'consumption_star' => 0,
            'description' => '味方側全体を応援することで、味方側全体のFSを1～2増やします。'
        ],
        [
            'mysterys_type_name' => '魔力解放Ｌｖ１',
            'range_type_id' => 4,
            'impact_range_id' => 3,
            'prerequisites_type' => 48,
            'necessary_point' => 400,
            'consumption_fs' => 0,
            'consumption_mp' => 0,
            'consumption_star' => 0,
            'description' => '魔力を放出し、奥義使用の間、MPを毎ターン2消費し続ける代わりに、魔力を＋1します。'
        ],
        [
            'mysterys_type_name' => '近接武器攻撃急所狙い',
            'range_type_id' => 1,
            'impact_range_id' => 5,
            'prerequisites_type' => 36,
            'necessary_point' => 400,
            'consumption_fs' => 3,
            'consumption_mp' => 0,
            'consumption_star' => 0,
            'description' => '命中力が－3になる代わりに、攻撃力が1.5倍（端数切り上げ）の攻撃を仕掛けます。'
        ],
        [
            'mysterys_type_name' => '格闘急所狙い',
            'range_type_id' => 1,
            'impact_range_id' => 5,
            'prerequisites_type' => 19,
            'necessary_point' => 400,
            'consumption_fs' => 3,
            'consumption_mp' => 0,
            'consumption_star' => 0,
            'description' => '命中力が－3になる代わりに、攻撃力が1.5倍（端数切り上げ）の攻撃を仕掛けます。'
        ],
        [
            'mysterys_type_name' => '近接武器攻撃急降下攻撃',
            'range_type_id' => 2,
            'impact_range_id' => 5,
            'prerequisites_type' => 36,54,
            'necessary_point' => 400,
            'consumption_fs' => 3,
            'consumption_mp' => 0,
            'consumption_star' => 0,
            'description' => '上空から急降下しながら攻撃することで、命中力が－3になる代わりに、攻撃力が2倍（端数切り上げ）の攻撃を仕掛けます。使用する際には、自分が「自力上空飛行」状態であり、相手が地上にいるか、「自力低空飛行」状態である必要があります。また、攻撃実施後は「低空飛行状態」に移行します。'
        ],
        [
            'mysterys_type_name' => '格闘急降下攻撃',
            'range_type_id' => 2,
            'impact_range_id' => 5,
            'prerequisites_type' => 19,54,
            'necessary_point' => 400,
            'consumption_fs' => 3,
            'consumption_mp' => 0,
            'consumption_star' => 0,
            'description' => '上空から急降下しながら攻撃することで、命中力が－3になる代わりに、攻撃力が2倍（端数切り上げ）の攻撃を仕掛けます。使用する際には、自分が「自力上空飛行」状態であり、相手が地上にいるか、「自力低空飛行」状態である必要があります。また、攻撃実施後は「低空飛行状態」に移行します。'
        ],
        [
            'mysterys_type_name' => '近接武器攻撃カウンター',
            'range_type_id' => 4,
            'impact_range_id' => 3,
            'prerequisites_type' => 36,
            'necessary_point' => 400,
            'consumption_fs' => 3,
            'consumption_mp' => 0,
            'consumption_star' => 0,
            'description' => '攻撃を受けた際に反撃を行います。ただし、「遠隔攻撃」、「連携攻撃」、「魔法」、「モンスター行動の全体攻撃」に対しては通常の回避を行います。'
        ],
        [
            'mysterys_type_name' => '格闘カウンター',
            'range_type_id' => 4,
            'impact_range_id' => 3,
            'prerequisites_type' => 19,
            'necessary_point' => 400,
            'consumption_fs' => 3,
            'consumption_mp' => 0,
            'consumption_star' => 0,
            'description' => '攻撃を受けた際に反撃を行います。ただし、「遠隔攻撃」、「連携攻撃」、「魔法」、「モンスター行動の全体攻撃」に対しては通常の回避を行います。'
        ],
        [
            'mysterys_type_name' => '遠隔武器攻撃でたらめ撃ち',
            'range_type_id' => 2,
            'impact_range_id' => 6,
            'prerequisites_type' => 43,
            'necessary_point' => 400,
            'consumption_fs' => 3,
            'consumption_mp' => 0,
            'consumption_star' => 0,
            'description' => '命中力が－3の状態で、遠隔攻撃が届く範囲のランダムな敵にランダムな回数（1～4回）攻撃を仕掛けます。'
        ],
        [
            'mysterys_type_name' => '火薬銃でたらめ撃ち',
            'range_type_id' => 2,
            'impact_range_id' => 6,
            'prerequisites_type' => 29,
            'necessary_point' => 400,
            'consumption_fs' => 3,
            'consumption_mp' => 0,
            'consumption_star' => 0,
            'description' => '命中力が－3の状態で、遠隔攻撃が届く範囲のランダムな敵にランダムな回数（1～4回）攻撃を仕掛けます。'
        ],
        [
            'mysterys_type_name' => '挑発回避専念',
            'range_type_id' => 4,
            'impact_range_id' => 3,
            'prerequisites_type' => 6,
            'necessary_point' => 400,
            'consumption_fs' => 3,
            'consumption_mp' => 0,
            'consumption_star' => 0,
            'description' => '相手を挑発することで、［〔知力〕＋【戦術】技能レベル＋70］％の確率で自分に攻撃を向けさせます。感情を持たない者や、挑発されていることが分からないほど知性が低い者など、相手によっては効かないこともあります。挑発した後、回避専念状態になります。次に自分の手番が回ってくるまでの間有効です。'
        ],
        [
            'mysterys_type_name' => '挑発防御専念',
            'range_type_id' => 4,
            'impact_range_id' => 3,
            'prerequisites_type' => 6,
            'necessary_point' => 400,
            'consumption_fs' => 3,
            'consumption_mp' => 0,
            'consumption_star' => 0,
            'description' => '相手を挑発することで、［〔知力〕＋【戦術】技能レベル＋70］％の確率で自分に攻撃を向けさせます。感情を持たない者や、挑発されていることが分からないほど知性が低い者など、相手によっては効かないこともあります。挑発した後、防御専念状態になります。次に自分の手番が回ってくるまでの間有効です。'
        ],
        [
            'mysterys_type_name' => 'ディザーム',
            'range_type_id' => 1,
            'impact_range_id' => 5,
            'prerequisites_type' => 36,
            'necessary_point' => 400,
            'consumption_fs' => 2,
            'consumption_mp' => 0,
            'consumption_star' => 0,
            'description' => '武器を落とさせることを目的として、敵の持っている武器を狙って攻撃します。命中力－2で命中判定し、さらに〔筋力〕判定で相手に勝つことで、相手の武器装備を解除することができます。人間タイプの敵にしか効果を表しません。'
        ],
        [
            'mysterys_type_name' => '小網投げ',
            'range_type_id' => 2,
            'impact_range_id' => 5,
            'prerequisites_type' => 11,51,
            'necessary_point' => 400,
            'consumption_fs' => 5,
            'consumption_mp' => 0,
            'consumption_star' => 0,
            'description' => '最大1体分が入る大きさの網を投げつけ、奥義が命中した相手の身動きを封じます。網を被せられた相手は、網から脱出するまでの間、1～3ターンの間「停止」状態になります。命中判定は[〔敏捷〕＋〔筋力〕＋【投網】技能レベル－2］で行います。道具として「小網」を所持している必要があります。'
        ],
        [
            'mysterys_type_name' => '生命毒の吹き矢'
            'range_type_id' => 2,
            'impact_range_id' => 5,
            'prerequisites_type' => 2,24,
            'necessary_point' => 500,
            'consumption_fs' => 0,
            'consumption_mp' => 2,
            'consumption_star' => 0
            'description' => '生命毒を塗った吹き矢を放ちます。命中判定は[〔敏捷〕＋〔筋力〕＋【吹き矢】技能レベル］で行い、命中した場合、その後毒が効いたかどうかの相手側抵抗判定に対して、毒効果判定を[〔知力〕＋【毒物】技能レベル］で行います。道具として「吹き矢筒」を所持している必要があります。'
        ],
        [
            'mysterys_type_name' => '近接武器攻撃衝撃魔攻連撃'
            'range_type_id' => 1,
            'impact_range_id' => 5,
            'prerequisites_type' => 35,58,
            'necessary_point' => 400,
            'consumption_fs' => 3,
            'consumption_mp' => 1,
            'consumption_star' => 0
            'description' => '通常攻撃をすると同時に至近距離から『接触衝撃攻撃』の魔法を撃ち込みます。'
        ],
        [
            'mysterys_type_name' => '格闘衝撃魔攻連撃',
            'range_type_id' => 1,
            'impact_range_id' => 5,
            'prerequisites_type' => 18,58,
            'necessary_point' => 400,
            'consumption_fs' => 3,
            'consumption_mp' => 1,
            'consumption_star' => 0,
            'description' => '通常攻撃をすると同時に至近距離から『接触衝撃攻撃』の魔法を撃ち込みます。'
        ],
        [
            'mysterys_type_name' => '近接武器攻撃炎熱魔攻連撃',
            'range_type_id' => 1,
            'impact_range_id' => 5,
            'prerequisites_type' => 35,57,
            'necessary_point' => 400,
            'consumption_fs' => 3,
            'consumption_mp' => 1,
            'consumption_star' => 0,
            'description' => '通常攻撃をすると同時に至近距離から『接触炎熱攻撃』の魔法を撃ち込みます。'
        ],
        [
            'mysterys_type_name' => '格闘炎熱魔攻連撃',
            'range_type_id' => 1,
            'impact_range_id' => 5,
            'prerequisites_type' => 18,57,
            'necessary_point' => 400,
            'consumption_fs' => 3,
            'consumption_mp' => 1,
            'consumption_star' => 0,
            'description' => '通常攻撃をすると同時に至近距離から『接触炎熱攻撃』の魔法を撃ち込みます。'
        ],
        [
            'mysterys_type_name' => '近接武器攻撃氷冷魔攻連撃',
            'range_type_id' => 1,
            'impact_range_id' => 5,
            'prerequisites_type' => 35,56,
            'necessary_point' => 400,
            'consumption_fs' => 3,
            'consumption_mp' => 1,
            'consumption_star' => 0,
            'description' => '通常攻撃をすると同時に至近距離から『接触氷冷攻撃』の魔法を撃ち込みます。'
        ],
        [
            'mysterys_type_name' => '格闘氷冷魔攻連撃',
            'range_type_id' => 1,
            'impact_range_id' => 5,
            'prerequisites_type' => 18,56,
            'necessary_point' => 400,
            'consumption_fs' => 3,
            'consumption_mp' => 1,
            'consumption_star' => 0,
            'description' => '通常攻撃をすると同時に至近距離から『接触氷冷攻撃』の魔法を撃ち込みます。'
        ],
        [
            'mysterys_type_name' => '近接武器攻撃雷電魔攻連撃',
            'range_type_id' => 1,
            'impact_range_id' => 5,
            'prerequisites_type' => 35,59,
            'necessary_point' => 400,
            'consumption_fs' => 3,
            'consumption_mp' => 1,
            'consumption_star' => 0,
            'description' => '通常攻撃をすると同時に至近距離から『接触雷電攻撃』の魔法を撃ち込みます。'
        ],
        [
            'mysterys_type_name' => '格闘雷電魔攻連撃',
            'range_type_id' => 1,
            'impact_range_id' => 5,
            'prerequisites_type' => 18,59,
            'necessary_point' => 400,
            'consumption_fs' => 3,
            'consumption_mp' => 1,
            'consumption_star' => 0,
            'description' => '通常攻撃をすると同時に至近距離から『接触雷電攻撃』の魔法を撃ち込みます。'
        ],
        [
            'mysterys_type_name' => '銃拳連撃',
            'range_type_id' => 1,
            'impact_range_id' => 5,
            'prerequisites_type' => 28,18,
            'necessary_point' => 400,
            'consumption_fs' => 3,
            'consumption_mp' => 0,
            'consumption_star' => 0,
            'description' => '通常攻撃をすると同時に至近距離から火薬銃による銃弾を撃ち込みます。'
        ],
        [
            'mysterys_type_name' => '暗剣殺',
            'range_type_id' => 1,
            'impact_range_id' => 5,
            'prerequisites_type' => 36,60,
            'necessary_point' => 500,
            'consumption_fs' => 3,
            'consumption_mp' => 1,
            'consumption_star' => 0,
            'description' => '相手を局所的な暗闇で包み込むことで視界を遮り回避力を－4した状態で、近接攻撃を仕掛けます。'
        ],
        [
            'mysterys_type_name' => '暗拳殺',
            'range_type_id' => 1,
            'impact_range_id' => 5,
            'prerequisites_type' => 19,60,
            'necessary_point' => 500,
            'consumption_fs' => 3,
            'consumption_mp' => 1,
            'consumption_star' => 0,
            'description' => '相手を局所的な暗闇で包み込むことで視界を遮り回避力を－4した状態で、近接攻撃を仕掛けます。'
        ],
        [
            'mysterys_type_name' => '暗弓殺',
            'range_type_id' => 2,
            'impact_range_id' => 5,
            'prerequisites_type' => 43,60,
            'necessary_point' => 500,
            'consumption_fs' => 3,
            'consumption_mp' => 1,
            'consumption_star' => 0,
            'description' => '相手を局所的な暗闇で包み込むことで視界を遮り回避力を－4した状態で、遠隔攻撃を仕掛けます。'
        ],
        [
            'mysterys_type_name' => '暗銃殺',
            'range_type_id' => 2,
            'impact_range_id' => 5,
            'prerequisites_type' => 29,60,
            'necessary_point' => 500,
            'consumption_fs' => 3,
            'consumption_mp' => 1,
            'consumption_star' => 0,
            'description' => '相手を局所的な暗闇で包み込むことで視界を遮り回避力を－4した状態で、遠隔攻撃を仕掛けます。'
        ],
        [
            'mysterys_type_name' => '近接武器攻撃チャージ',
            'range_type_id' => 1,
            'impact_range_id' => 5,
            'prerequisites_type' => 36,
            'necessary_point' => 400,
            'consumption_fs' => 4,
            'consumption_mp' => 0,
            'consumption_star' => 0,
            'description' => '相手に突撃を仕掛けます。命中力が－4になる代わりに、攻撃力が2倍になり、さらに相手が前衛であれば後衛に移動させ（吹き飛ばし）ます。'
        ],
        [
            'mysterys_type_name' => '格闘チャージ',
            'range_type_id' => 1,
            'impact_range_id' => 5,
            'prerequisites_type' => 19,
            'necessary_point' => 400,
            'consumption_fs' => 4,
            'consumption_mp' => 0,
            'consumption_star' => 0,
            'description' => '相手に突撃を仕掛けます。命中力が－4になる代わりに、攻撃力が2倍になり、さらに相手が前衛であれば後衛に移動させ（吹き飛ばし）ます。'
        ],
        [
            'mysterys_type_name' => '引き摺り回し',
            'range_type_id' => 2,
            'impact_range_id' => 5,
            'prerequisites_type' => 9,52,
            'necessary_point' => 400,
            'consumption_fs' => 5,
            'consumption_mp' => 0,
            'consumption_star' => 0,
            'description' => '相手に縄を引き掛け、奥義が命中した相手を引き摺り回すことで威力値20のダメージを与え、さらに転倒させます。命中判定は[〔敏捷〕＋〔筋力〕＋【投げ縄】技能レベル－2］で行います。道具として「ロープ」を所持している必要があります。'
        ],
        [
            'mysterys_type_name' => '遠隔武器攻撃ホーミング'
            'range_type_id' => 2,
            'impact_range_id' => 5,
            'prerequisites_type' => 43,63,
            'necessary_point' => 500,
            'consumption_fs' => 4,
            'consumption_mp' => 1,
            'consumption_star' => 0
            'description' => '飛び道具を放った後、風の力により相手の動きを追跡させることで、命中力を＋5します。'
        ],
        [
            'mysterys_type_name' => '火薬銃ホーミング',
            'range_type_id' => 2,
            'impact_range_id' => 5,
            'prerequisites_type' => 29,63,
            'necessary_point' => 500,
            'consumption_fs' => 4,
            'consumption_mp' => 1,
            'consumption_star' => 0,
            'description' => '弾丸を放った後、風の力により相手の動きを追跡させることで、命中力を＋5します。'
        ],
        [
            'mysterys_type_name' => '近接武器攻撃二連撃',
            'range_type_id' => 1,
            'impact_range_id' => 5,
            'prerequisites_type' => 37,
            'necessary_point' => 800,
            'consumption_fs' => 5,
            'consumption_mp' => 0,
            'consumption_star' => 1,
            'description' => '同じ敵に連続で2回攻撃を仕掛けます。'
        ],
        [
            'mysterys_type_name' => '格闘二連撃',
            'range_type_id' => 1,
            'impact_range_id' => 5,
            'prerequisites_type' => 20,
            'necessary_point' => 800,
            'consumption_fs' => 5,
            'consumption_mp' => 0,
            'consumption_star' => 1,
            'description' => '同じ敵に連続で2回攻撃を仕掛けます。'
        ],
        [
            'mysterys_type_name' => '近接武器攻撃強撃',
            'range_type_id' => 1,
            'impact_range_id' => 5,
            'prerequisites_type' => 37,
            'necessary_point' => 800,
            'consumption_fs' => 5,
            'consumption_mp' => 0,
            'consumption_star' => 1,
            'description' => '攻撃力が2倍の攻撃を仕掛けます。'
        ],
        [
            'mysterys_type_name' => '格闘強撃',
            'range_type_id' => 1,
            'impact_range_id' => 5,
            'prerequisites_type' => 20,
            'necessary_point' => 800,
            'consumption_fs' => 5,
            'consumption_mp' => 0,
            'consumption_star' => 1,
            'description' => '攻撃力が2倍の攻撃を仕掛けます。'
        ],
        [
            'mysterys_type_name' => '近接武器攻撃気絶攻撃',
            'range_type_id' => 1,
            'impact_range_id' => 5,
            'prerequisites_type' => 37,
            'necessary_point' => 800,
            'consumption_fs' => 5,
            'consumption_mp' => 0,
            'consumption_star' => 1,
            'description' => '奥義が命中した相手にダメージを与えた上でさらに気絶させます。'
        ],
        [
            'mysterys_type_name' => '格闘気絶攻撃',
            'range_type_id' => 1,
            'impact_range_id' => 5,
            'prerequisites_type' => 20,
            'necessary_point' => 800,
            'consumption_fs' => 5,
            'consumption_mp' => 0,
            'consumption_star' => 1,
            'description' => '奥義が命中した相手にダメージを与えた上でさらに気絶させます。'
        ],
        [
            'mysterys_type_name' => '遠隔武器攻撃二連射',
            'range_type_id' => 2,
            'impact_range_id' => 5,
            'prerequisites_type' => 44,
            'necessary_point' => 800,
            'consumption_fs' => 5,
            'consumption_mp' => 0,
            'consumption_star' => 1,
            'description' => '同じ敵に連続で2回攻撃を仕掛けます。'
        ],
        [
            'mysterys_type_name' => '火薬銃二連射',
            'range_type_id' => 2,
            'impact_range_id' => 5,
            'prerequisites_type' => 30,
            'necessary_point' => 800,
            'consumption_fs' => 5,
            'consumption_mp' => 0,
            'consumption_star' => 1,
            'description' => '同じ敵に連続で2回攻撃を仕掛けます。'
        ],
        [
            'mysterys_type_name' => 'バーサーク',
            'range_type_id' => 4,
            'impact_range_id' => 3,
            'prerequisites_type' => 7,
            'necessary_point' => 800,
            'consumption_fs' => 5,
            'consumption_mp' => 4,
            'consumption_star' => 0,
            'description' => '狂戦士と化し、戦闘不能になるか、戦闘が終了するまでの間、命中力を＋5、攻撃力を＋5します。また、「眠り」と「気絶」状態にならなくなります。ただし、通常攻撃以外の行動が取れなくなります。（連携攻撃や奥義使用も不可能）'
        ],
        [
            'mysterys_type_name' => '投げ技',
            'range_type_id' => 1,
            'impact_range_id' => 5,
            'prerequisites_type' => 20,52,
            'necessary_point' => 800,
            'consumption_fs' => 5,
            'consumption_mp' => 0,
            'consumption_star' => 0,
            'description' => '奥義が命中した相手を投げることで威力値20のダメージを与え、さらに転倒させます。命中力は－3になります。命中判定は1回のみ行います。'
        ],
        [
            'mysterys_type_name' => '中網投げ',
            'range_type_id' => 2,
            'impact_range_id' => 6,
            'prerequisites_type' => 12,52,
            'necessary_point' => 1500,
            'consumption_fs' => 10,
            'consumption_mp' => 0,
            'consumption_star' => 0,
            'description' => '最大3体分が入る大きさの網を投げつけ、ランダムに1～3体の奥義が命中した相手の身動きを封じます。網を被せられた相手は、網から脱出するまでの間、1～3ターンの間「停止」状態になります。命中判定は[〔敏捷〕＋〔筋力〕＋【投網】技能レベル－3］で行います。地上にいる相手にのみ有効です。道具として「中網」を所持している必要があります。'
        ],
        [
            'mysterys_type_name' => '麻痺毒の吹き矢'
            'range_type_id' => 2,
            'impact_range_id' => 5,
            'prerequisites_type' => 2,25,
            'necessary_point' => 1600,
            'consumption_fs' => 0,
            'consumption_mp' => 4,
            'consumption_star' => 0
            'description' => '麻痺毒を塗った吹き矢を放ちます。命中判定は[〔敏捷〕＋〔筋力〕＋【吹き矢】技能レベル］で行い、命中した場合、その後毒が効いたかどうかの相手側抵抗判定に対して、毒効果判定を[〔知力〕＋【毒物】技能レベル］で行います。道具として「吹き矢筒」を所持している必要があります。'
        ],
        [
            'mysterys_type_name' => '魔力解放Ｌｖ２'
            'range_type_id' => 4,
            'impact_range_id' => 3,
            'prerequisites_type' => 49,
            'necessary_point' => 1500,
            'consumption_fs' => 0,
            'consumption_mp' => 0,
            'consumption_star' => 0,
            'description' => '魔力を放出し、奥義使用の間、MPを毎ターン4消費し続ける代わりに、魔力を＋2します。'
        ],
        [
            'mysterys_type_name' => '疾風の布陣',
            'range_type_id' => 4,
            'impact_range_id' => 4,
            'prerequisites_type' => 15,
            'necessary_point' => 1500,
            'consumption_fs' => 0,
            'consumption_mp' => 9,
            'consumption_star' => 0,
            'description' => '仲間を指揮し、素早く動くことに適した陣形を組むことで、戦闘が終了するまでの間、味方側全員の〔敏捷〕を＋1します。声を出す必要があるため、「消音」状態、「沈黙」状態では使用できません。また、空中に居る者、地中に居る者、動けない者、声が聞こえない者は陣形に参加できません。陣形に参加中に空中に移動した者、地中に移動した者は陣形から外れます。ただし、この「疾風の布陣」による〔敏捷〕の向上は、戦闘中に行う「能力判定」や「技能判定」には作用しません。他の布陣の陣形に移動すると、この布陣は解除されます。'
        ],
        [
            'mysterys_type_name' => '烈火の布陣',
            'range_type_id' => 4,
            'impact_range_id' => 4,
            'prerequisites_type' => 15,
            'necessary_point' => 1500,
            'consumption_fs' => 0,
            'consumption_mp' => 9,
            'consumption_star' => 0,
            'description' => '仲間を指揮し、攻撃に適した陣形を組むことで、戦闘が終了するまでの間、味方側全員の攻撃力を＋3します。ただし、バディ・NPC・モンスタータイプの敵のモンスター行動には作用しません。声を出す必要があるため、「消音」状態、「沈黙」状態では使用できません。また、空中に居る者、地中に居る者、動けない者、声が聞こえない者は陣形に参加できません。陣形に参加中に空中に移動した者、地中に移動した者は陣形から外れます。他の布陣の陣形に移動すると、この布陣は解除されます。'
        ],
        [
            'mysterys_type_name' => '近接武器攻撃跳躍撃',
            'range_type_id' => 1,
            'impact_range_id' => 5,
            'prerequisites_type' => 37,61,
            'necessary_point' => 1200,
            'consumption_fs' => 8,
            'consumption_mp' => 3,
            'consumption_star' => 1,
            'description' => '魔法の力を借りて大ジャンプし、落下スピードと全体重を乗せた一撃を浴びせます。命中力が－5になる代わりに、攻撃力が3倍の攻撃を仕掛けます。'
        ],
        [
            'mysterys_type_name' => '格闘跳躍撃',
            'range_type_id' => 1,
            'impact_range_id' => 5,
            'prerequisites_type' => 20,61,
            'necessary_point' => 1200,
            'consumption_fs' => 8,
            'consumption_mp' => 3,
            'consumption_star' => 1,
            'description' => '魔法の力を借りて大ジャンプし、落下スピードと全体重を乗せた一撃を浴びせます。命中力が－5になる代わりに、攻撃力が3倍の攻撃を仕掛けます。'
        ],
        [
            'mysterys_type_name' => '鼓舞',
            'range_type_id' => 4,
            'impact_range_id' => 4,
            'prerequisites_type' => 15,
            'necessary_point' => 1500,
            'consumption_fs' => 0,
            'consumption_mp' => 7,
            'consumption_star' => 0,
            'description' => '声掛けなどにより仲間の士気を上げることで、戦闘が終了するまでの間、味方側全員の命中力を＋1、攻撃力を＋1します。ただし、バディ・NPC・モンスタータイプの敵のモンスター行動には作用しません。声を出す必要があるため、「消音」状態、「沈黙」状態では使用できません。また、何らかの原因で使用者の声が聞こえない者は影響を受けません。'
        ],
        [
            'mysterys_type_name' => '近接武器攻撃分身撃',
            'range_type_id' => 1,
            'impact_range_id' => 5,
            'prerequisites_type' => 37,55,
            'necessary_point' => 1600,
            'consumption_fs' => 5,
            'consumption_mp' => 4,
            'consumption_star' => 0,
            'description' => '分身した状態で相手に攻撃を仕掛けます。相手はまず分身のどれが本体なのかを見極める必要があり、それに失敗すると回避判定自体ができなくなります。思わぬ方向から攻撃を受けるため、攻撃力が2倍の攻撃になります。'
        ],
        [
            'mysterys_type_name' => '格闘分身撃',
            'range_type_id' => 1,
            'impact_range_id' => 5,
            'prerequisites_type' => 20,55,
            'necessary_point' => 1600,
            'consumption_fs' => 5,
            'consumption_mp' => 4,
            'consumption_star' => 0,
            'description' => '分身した状態で相手に攻撃を仕掛けます。相手はまず分身のどれが本体なのかを見極める必要があり、それに失敗すると回避判定自体ができなくなります。思わぬ方向から攻撃を受けるため、攻撃力が2倍の攻撃になります。'
        ],
        [
            'mysterys_type_name' => 'ぶん投げ',
            'range_type_id' => 2,
            'impact_range_id' => 5,
            'prerequisites_type' => 10,53,
            'necessary_point' => 1500,
            'consumption_fs' => 10,
            'consumption_mp' => 0,
            'consumption_star' => 0,
            'description' => '相手に縄を引き掛け、奥義が命中した相手をぶん投げることで威力値30のダメージを与え、さらに転倒させます。命中判定は[〔敏捷〕＋〔筋力〕＋【投げ縄】技能レベル－2］で行います。道具として「ロープ」を所持している必要があります。'
        ],
        [
            'mysterys_type_name' => '近接武器攻撃乱撃'
            'range_type_id' => 1,
            'impact_range_id' => 6,
            'prerequisites_type' => 38,
            'necessary_point' => 1500,
            'consumption_fs' => 10,
            'consumption_mp' => 0,
            'consumption_star' => 1
            'description' => '近接攻撃が届く範囲の複数のランダムな敵にランダムな回数（2～5回）撃を仕掛けます。'
        ],
        [
            'mysterys_type_name' => '格闘乱撃',
            'range_type_id' => 1,
            'impact_range_id' => 6,
            'prerequisites_type' => 21,
            'necessary_point' => 1500,
            'consumption_fs' => 10,
            'consumption_mp' => 0,
            'consumption_star' => 1,
            'description' => '近接攻撃が届く範囲の複数のランダムな敵にランダムな回数（2～5回）撃を仕掛けます。'
        ],
        [
            'mysterys_type_name' => '遠隔武器攻撃乱射',
            'range_type_id' => 2,
            'impact_range_id' => 6,
            'prerequisites_type' => 45,
            'necessary_point' => 1500,
            'consumption_fs' => 10,
            'consumption_mp' => 0,
            'consumption_star' => 1,
            'description' => '遠隔攻撃が届く範囲のランダムな敵にランダムな回数（2～5回）攻撃を仕掛けます。'
        ],
        [
            'mysterys_type_name' => '火薬銃乱射',
            'range_type_id' => 2,
            'impact_range_id' => 6,
            'prerequisites_type' => 31,
            'necessary_point' => 1500,
            'consumption_fs' => 10,
            'consumption_mp' => 0,
            'consumption_star' => 1,
            'description' => '遠隔攻撃が届く範囲のランダムな敵にランダムな回数（2～5回）攻撃を仕掛けます。'
        ],
        [
            'mysterys_type_name' => '近接武器攻撃バックスタブ',
            'range_type_id' => 1,
            'impact_range_id' => 5,
            'prerequisites_type' => 38,3,
            'necessary_point' => 3000,
            'consumption_fs' => 6,
            'consumption_mp' => 0,
            'consumption_star' => 0,
            'description' => '相手の背面に回り込み、背後から攻撃力が2倍の攻撃を仕掛けます。命中判定をする代わりに、攻撃側の〔敏捷〕＋【忍び足】技能レベルでの技能判定と相手側の〔敏捷〕のみでの能力判定で勝負を行い、攻撃側の達成値が上回ったら、攻撃が命中します。'
        ],
        [
            'mysterys_type_name' => '格闘バックスタブ',
            'range_type_id' => 1,
            'impact_range_id' => 5,
            'prerequisites_type' => 21,3,
            'necessary_point' => 3000,
            'consumption_fs' => 6,
            'consumption_mp' => 0,
            'consumption_star' => 0,
            'description' => '相手の背面に回り込み、背後から攻撃力が2倍の攻撃を仕掛けます。命中判定をする代わりに、攻撃側の〔敏捷〕＋【忍び足】技能レベルでの技能判定と相手側の〔敏捷〕のみでの能力判定で勝負を行い、攻撃側の達成値が上回ったら、攻撃が命中します。'
        ],
        [
            'mysterys_type_name' => 'スイーピングブロウ',
            'range_type_id' => 1,
            'impact_range_id' => 16,
            'prerequisites_type' => 39,
            'necessary_point' => 2700,
            'consumption_fs' => 8,
            'consumption_mp' => 0,
            'consumption_star' => 1,
            'description' => '近接攻撃が届く相手全員に［近接攻撃攻撃力÷2（端数切り上げ）］の攻撃力で攻撃を仕掛けます。'
        ],
        [
            'mysterys_type_name' => '近接武器攻撃三連撃',
            'range_type_id' => 1,
            'impact_range_id' => 5,
            'prerequisites_type' => 39,
            'necessary_point' => 2700,
            'consumption_fs' => 8,
            'consumption_mp' => 0,
            'consumption_star' => 2,
            'description' => '同じ敵に連続で3回攻撃を仕掛けます。'
        ],
        [
            'mysterys_type_name' => '格闘三連撃',
            'range_type_id' => 1,
            'impact_range_id' => 5,
            'prerequisites_type' => 22,
            'necessary_point' => 2700,
            'consumption_fs' => 8,
            'consumption_mp' => 0,
            'consumption_star' => 2,
            'description' => '同じ敵に連続で3回攻撃を仕掛けます。'
        ],
        [
            'mysterys_type_name' => '近接武器攻撃大強撃',
            'range_type_id' => 1,
            'impact_range_id' => 5,
            'prerequisites_type' => 39,
            'necessary_point' => 2700,
            'consumption_fs' => 8,
            'consumption_mp' => 0,
            'consumption_star' => 2,
            'description' => '攻撃力が3倍の攻撃を仕掛けます。'
        ],
        [
            'mysterys_type_name' => '格闘大強撃',
            'range_type_id' => 1,
            'impact_range_id' => 5,
            'prerequisites_type' => 22,
            'necessary_point' => 2700,
            'consumption_fs' => 8,
            'consumption_mp' => 0,
            'consumption_star' => 2,
            'description' => '攻撃力が3倍の攻撃を仕掛けます。'
        ],
        [
            'mysterys_type_name' => '遠隔武器攻撃三連射',
            'range_type_id' => 2,
            'impact_range_id' => 5,
            'prerequisites_type' => 46,
            'necessary_point' => 2700,
            'consumption_fs' => 8,
            'consumption_mp' => 0,
            'consumption_star' => 2,
            'description' => '同じ敵に連続で3回攻撃を仕掛けます。'
        ],
        [
            'mysterys_type_name' => '火薬銃三連射',
            'range_type_id' => 2,
            'impact_range_id' => 5,
            'prerequisites_type' => 32,
            'necessary_point' => 2700,
            'consumption_fs' => 8,
            'consumption_mp' => 0,
            'consumption_star' => 2,
            'description' => '同じ敵に連続で3回攻撃を仕掛けます。'
        ],
        [
            'mysterys_type_name' => '遠隔武器攻撃バラージシュート',
            'range_type_id' => 3,
            'impact_range_id' => 3,
            'prerequisites_type' => 46,
            'necessary_point' => 2700,
            'consumption_fs' => 2,
            'consumption_mp' => 0,
            'consumption_star' => 0,
            'description' => '味方全体の誰かに飛んできた遠隔攻撃、遠隔攻撃魔法、モンスター行動の遠隔攻撃に対して飛び道具をぶつけ、[〔敏捷〕＋〔筋力〕＋【遠隔武器攻撃（火薬銃以外）】技能レベル－2］で撃墜を試みます。撃墜に失敗した際でも、さらにもう一度通常の回避を行うことができます。ただし、「近接攻撃」、「全体攻撃魔法」、「モンスター行動の全体攻撃」、「攻撃以外のモンスター行動」に対しては通常の回避を行います。'
        ],
        [
            'mysterys_type_name' => '火薬銃バラージシュート'
            'range_type_id' => 3,
            'impact_range_id' => 3,
            'prerequisites_type' => 32,
            'necessary_point' => 2700,
            'consumption_fs' => 2,
            'consumption_mp' => 0,
            'consumption_star' => 0,
            'description' => '味方全体の誰かに飛んできた遠隔攻撃、遠隔攻撃魔法、モンスター行動の遠隔攻撃に対して飛び道具をぶつけ、[〔敏捷〕＋〔筋力〕＋【火薬銃】技能レベル－2］で撃墜を試みます。撃墜に失敗した際でも、さらにもう一度通常の回避を行うことができます。ただし、「近接攻撃」、「全体攻撃魔法」、「モンスター行動の全体攻撃」、「攻撃以外のモンスター行動」に対しては通常の回避を行います。'
        ],
        [
            'mysterys_type_name' => '生命猛毒の吹き矢'
            'range_type_id' => 2,
            'impact_range_id' => 5,
            'prerequisites_type' => 2,26,
            'necessary_point' => 2800,
            'consumption_fs' => 0,
            'consumption_mp' => 5,
            'consumption_star' => 0
            'description' => '生命猛毒を塗った吹き矢を放ちます。命中判定は[〔敏捷〕＋〔筋力〕＋【吹き矢】技能レベル］で行い、命中した場合、その後毒が効いたかどうかの相手側抵抗判定に対して、毒効果判定を[〔知力〕＋【毒物】技能レベル］で行います。道具として「吹き矢筒」を所持している必要があります。'
        ],
        [
            'mysterys_type_name' => '魔力解放Ｌｖ３'
            'range_type_id' => 4,
            'impact_range_id' => 3,
            'prerequisites_type' => 50,
            'necessary_point' => 4900,
            'consumption_fs' => 0,
            'consumption_mp' => 0,
            'consumption_star' => 0,
            'description' => '魔力を放出し、奥義使用の間、MPを毎ターン6消費し続ける代わりに、魔力を＋3します。'
        ],
        [
            'mysterys_type_name' => '大網投げ',
            'range_type_id' => 2,
            'impact_range_id' => 6,
            'prerequisites_type' => 13,53,
            'necessary_point' => 4900,
            'consumption_fs' => 15,
            'consumption_mp' => 0,
            'consumption_star' => 0,
            'description' => '最大5体分が入る大きさの網を投げつけ、ランダムに1～5体の奥義が命中した相手の身動きを封じます。網を被せられた相手は、網から脱出するまでの間、1～3ターンの間「停止」状態になります。命中判定は[〔敏捷〕＋〔筋力〕＋【投網】技能レベル－4］で行います。地上にいる相手にのみ有効です。道具として「大網」を所持している必要があります。'
        ],
        [
            'mysterys_type_name' => '聖戦の布陣',
            'range_type_id' => 4,
            'impact_range_id' => 4,
            'prerequisites_type' => 16,
            'necessary_point' => 4900,
            'consumption_fs' => 0,
            'consumption_mp' => 19,
            'consumption_star' => 0,
            'description' => '仲間を指揮し、戦闘に適した究極の陣形を組むことで、戦闘が終了するまでの間、味方側全員の衝撃防御力を＋2、敏捷を＋1、攻撃力を＋3します。声を出す必要があるため、「消音」状態、「沈黙」状態では使用できません。また、空中に居る者、地中に居る者、動けない者、声が聞こえない者は陣形に参加できません。陣形に参加中に空中に移動した者、地中に移動した者は陣形から外れます。他の布陣の陣形に移動すると、この布陣は解除されます。'
        ],
        [
            'mysterys_type_name' => '近接武器攻撃超連撃',
            'range_type_id' => 1,
            'impact_range_id' => 5,
            'prerequisites_type' => 40,
            'necessary_point' => 4900,
            'consumption_fs' => 20,
            'consumption_mp' => 0,
            'consumption_star' => 3,
            'description' => '同じ敵に［近接攻撃攻撃力÷2（端数切り上げ）］の攻撃力で［〔敏捷〕＋【近接武器攻撃】技能レベル］回の攻撃を仕掛けます。'
        ],
        [
            'mysterys_type_name' => '格闘超連撃',
            'range_type_id' => 1,
            'impact_range_id' => 5,
            'prerequisites_type' => 23,
            'necessary_point' => 4900,
            'consumption_fs' => 20,
            'consumption_mp' => 0,
            'consumption_star' => 3,
            'description' => '同じ敵に［格闘攻撃力÷2（端数切り上げ）］の攻撃力で［〔敏捷〕＋【格闘】技能レベル］回の攻撃を仕掛けます。'
        ],
        [
            'mysterys_type_name' => '遠隔武器攻撃超連射',
            'range_type_id' => 2,
            'impact_range_id' => 5,
            'prerequisites_type' => 47,
            'necessary_point' => 4900,
            'consumption_fs' => 20,
            'consumption_mp' => 0,
            'consumption_star' => 3,
            'description' => '同じ敵に［遠隔攻撃攻撃力÷2（端数切り上げ）］の攻撃力で［〔敏捷〕＋【遠隔武器攻撃（火薬銃以外）】技能レベル］回の攻撃を仕掛けます。'
        ],
        [
            'mysterys_type_name' => '火薬銃超連射',
            'range_type_id' => 2,
            'impact_range_id' => 5,
            'prerequisites_type' => 33,
            'necessary_point' => 4900,
            'consumption_fs' => 20,
            'consumption_mp' => 0,
            'consumption_star' => 3,
            'description' => '同じ敵に［火薬銃攻撃力÷2（端数切り上げ）］の攻撃力で［〔敏捷〕＋【火薬銃】技能レベル］回の攻撃を仕掛けます。'
        ],
        [
            'mysterys_type_name' => '遠隔武器攻撃超乱射',
            'range_type_id' => 2,
            'impact_range_id' => 6,
            'prerequisites_type' => 47,
            'necessary_point' => 4900,
            'consumption_fs' => 20,
            'consumption_mp' => 0,
            'consumption_star' => 3,
            'description' => '遠隔攻撃が届く範囲の複数の敵にランダムにランダムな回数（6～10回）攻撃を仕掛けます。'
        ],
        [
            'mysterys_type_name' => '火薬銃超乱射',
            'range_type_id' => 2,
            'impact_range_id' => 6,
            'prerequisites_type' => 33,
            'necessary_point' => 4900,
            'consumption_fs' => 20,
            'consumption_mp' => 0,
            'consumption_star' => 3,
            'description' => '遠隔攻撃が届く範囲の複数の敵にランダムにランダムな回数（6～10回）攻撃を仕掛けます。'
        ]
      ]);
    }
}
