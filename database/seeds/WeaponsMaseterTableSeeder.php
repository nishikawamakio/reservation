<?php

use Illuminate\Database\Seeder;

class WeaponsMaseterTableSeeder extends Seeder
{
    private $militiaList = [
        '最軽量近接武器'   => 1,
        '小型近接武器'     => 2,
        '中型近接武器'     => 3,
        '大型近接武器'     => 4,
        '最重量近接武器'   => 5,
    ];

    private $distanceList = [
        '最軽量遠距離武器' => 1,
        '小型遠距離武器'   => 2,
        '中型遠距離武器'   => 3,
        '大型遠距離武器'   => 4,
        '最重量遠距離武器' => 5,
    ];

    private $gunList = [
        '最軽量火縄銃'     => 1,
        '小型火縄銃'       => 2,
        '中型火縄銃'       => 3,
        '大型火縄銃'       => 4,
        '最重量火縄銃'     => 5,
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

    /**
     * サブ条件の計算係数
     * @var integer
     */
    const COEFFICIENT = 2;

    /**
     * 遠距離武器用のダメージ係数
     * @var unknown
     */
    const DISTANCE = 1.8;

    /**
     * 火薬武器用のダメージ係数
     * @var integer
     */
    const GUN = 3;

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // 近接武器のアーキタイプ作成
        $this->createWeaponData($this->militiaList);
        // 遠距離武器のアーキタイプ作成
        $this->createWeaponData($this->distanceList,1.8, -1);
        // 火薬銃のアーキタイプ作成
        $this->createWeaponData($this->gunList, 3, -2);

    }

    private function createWeaponData($weaponList, $damageCoefficient = 2, $hitCoefficient = 0) {
        // 三種類の制限事項に基づいて、防具のアーキタイプが作成される
        // 三重foreachに強烈な違和感を感じるも、パッと思つかなかったのでとりあえずこれで
        // 良い案があれば募集中
        foreach ($weaponList as $typeName => $strength) {
            foreach ($this->dexteritRequiredList as $dexteritRequiredName => $dexterit){
                foreach($this->intelligenceRequiredList as $intelligenceRequiredName => $intelligence) {
                    $weaponData = [
                        'weapons_type_name'     => $typeName . $dexteritRequiredName . $intelligenceRequiredName,
                        'required_strength'     => $strength,
                        'required_dexterity'    => $dexterit,
                        'required_intelligence' => $intelligence,
                        'damage'                => floor( $strength * $damageCoefficient ) + floor( $intelligence/self::COEFFICIENT ),
                        'hit'                   => (-$strength - $hitCoefficient) + floor( $dexterit/self::COEFFICIENT ),
                        'description'           => '',
                    ];
                    DB::table('weapons_maseter')->insert($weaponData);
                }
            }
        }
    }
}
