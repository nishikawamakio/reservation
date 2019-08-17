<?php

use Illuminate\Database\Seeder;

class WeaponsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('weapons')->insert([
        [
            'character_id' => 1,
            'weapon_masters_id' => 1,
            'weapon_name' => 'さびた剣',
            'damage' => 5,
            'hit' => 5,
            'addition_type' => 1,
            'addition_level' => 1,
            'description' => '切れ味の悪い剣',
        ],
        [
            'character_id' => 2,
            'weapon_masters_id' => 4,
            'weapon_name' => '魔法使いの杖',
            'damage' => 5,
            'hit' => 5,
            'addition_type' => 2,
            'addition_level' => 10,
            'description' => '魔法力の高い杖',
        ],
        [
            'character_id' => 3,
            'weapon_masters_id' => 3,
            'weapon_name' => '鉄の斧',
            'damage' => 15,
            'hit' => 10,
            'addition_type' => 1,
            'addition_level' => 2,
            'description' => '攻撃力の高い斧',
        ]
      ]);
    }
}
