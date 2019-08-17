<?php
use Illuminate\Database\Seeder;
class ArmorsMaseterTableSeeder extends Seeder
{
    /**
     * 防具種別と必要筋力
     * @var array
     */
    private $armorTypeList = [
        '服・ローブ' => 0,
        '最軽量鎧'   => 1,
        '小型鎧'     => 2,
        '中型鎧'     => 3,
        '大型鎧'     => 4,
        '最重量鎧'   => 5,
    ];

    /**
     * 必要器用値のリスト
     * @var array
     */
    private $dexteritRequiredList = [
        ''   => 0,
        '+1' => 3,
        '+2' => 5,
        '+3' => 7,
    ];

    /**
     * 必要知力値のリスト
     * @var array
     */
    private $intelligenceRequiredList = [
        ''  => 0,
        'C' => 3,
        'B' => 5,
        'A' => 7,
    ];

    const COEFFICIENT = 2;


    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // 三種類の制限事項に基づいて、防具のアーキタイプが作成される
        // 三重foreachに強烈な違和感を感じるも、パッと思つかなかったのでとりあえずこれで
        // 良い案があれば募集中
        foreach ($this->armorTypeList as $typeName => $strength) {
            foreach ($this->dexteritRequiredList as $dexteritRequiredName => $dexterit){
                foreach($this->intelligenceRequiredList as $intelligenceRequiredName => $intelligence) {
                    $armorData = [
                        'armors_type_name'      => $typeName . $dexteritRequiredName . $intelligenceRequiredName,
                        'required_strength'     => $strength,
                        'required_dexterity'    => $dexterit,
                        'required_intelligence' => $intelligence,
                        'evasion'               => -$strength + floor( $intelligence/self::COEFFICIENT ),
                        'impact_gurad'          => $strength + floor( $dexterit/self::COEFFICIENT ),
                    ];

                    DB::table('armors_maseter')->insert($armorData);
                }
            }
        }
    }
}