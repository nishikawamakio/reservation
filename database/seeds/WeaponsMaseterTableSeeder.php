<?php

use Illuminate\Database\Seeder;

class WeaponsMaseterTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('weapons_maseter')->insert([
        [
            'weapons_type_name' => '剣（低）',
            'required_strength' => 5,
            'required_dexterity' => 5,
            'required_intelligence' => 5,
            'damage' => 5,
            'hit' => 5,
            'description' => '攻撃力の低い剣',
        ],
        [
            'weapons_type_name' => '剣（中）',
            'required_strength' => 10,
            'required_dexterity' => 10,
            'required_intelligence' => 10,
            'damage' => 5,
            'hit' => 5,
            'description' => '中程度な攻撃力の剣',
        ],
        [
            'weapons_type_name' => '斧（中）',
            'required_strength' => 10,
            'required_dexterity' => 10,
            'required_intelligence' => 10,
            'damage' => 5,
            'hit' => 5,
            'description' => '中程度な攻撃力の斧',
        ],
        [
            'weapons_type_name' => '杖（中）',
            'required_strength' => 5,
            'required_dexterity' => 15,
            'required_intelligence' => 15,
            'damage' => 5,
            'hit' => 5,
            'description' => '中程度な攻撃力の杖',
        ]
      ]);
    }
}
