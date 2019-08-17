<?php

use Illuminate\Database\Seeder;

class ArmorsMaseterTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('armors_maseter')->insert([
        [
            'armors_type_name' => '全種族（低）',
            'required_strength' => 1,
            'required_dexterity' => 1,
            'required_intelligence' => 1,
            'evasion' => 20,
            'impact_gurad' => 1,
        ],
        [
            'armors_type_name' => '剣士（低）',
            'required_strength' => 10,
            'required_dexterity' => 10,
            'required_intelligence' => 10,
            'evasion' => 5,
            'impact_gurad' => 15,
        ],
        [
            'armors_type_name' => 'アタッカー（中）',
            'required_strength' => 20,
            'required_dexterity' => 20,
            'required_intelligence' => 15,
            'evasion' => 5,
            'impact_gurad' => 20,
        ],
        [
            'armors_type_name' => 'メイジ（中）',
            'required_strength' => 5,
            'required_dexterity' => 10,
            'required_intelligence' => 10,
            'evasion' => 15,
            'impact_gurad' => 5,
        ]
      ]);
    }
}
