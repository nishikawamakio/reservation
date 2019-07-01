<?php

use Illuminate\Database\Seeder;

class ArmorsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('armors')->insert([
        [
            'character_id' => 1,
            'armor_masters_id' => 1,
            'armor_name' => '布衣',
            'addition_type' => 1,
            'addition_level' => 1,
            'evasion' => 20,
            'impact_gurad' => 0,
            'flame_guard' => 0,
            'ice_guard' => 0,
            'lightning_guard' => 0,
        ],
        [
            'character_id' => 2,
            'armor_masters_id' => 4,
            'armor_name' => '魔法使いのローブ',
            'addition_type' => 2,
            'addition_level' => 1,
            'evasion' => 30,
            'impact_gurad' => 0,
            'flame_guard' => 5,
            'ice_guard' => 5,
            'lightning_guard' => 5,
        ],
        [
            'character_id' => 3,
            'armor_masters_id' => 3,
            'armor_name' => '鉄の鎧',
            'addition_type' => 1,
            'addition_level' => 2,
            'evasion' => 5,
            'impact_gurad' => 20,
            'flame_guard' => 0,
            'ice_guard' => 0,
            'lightning_guard' => 0,
        ],
      ]);
    }
}
