<?php

use Illuminate\Database\Seeder;

class SkillsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('skills')->insert([
        [
            'character_id' => 1,
            'skill_masters_id' => 1,
            'level' => 5,
            'expTable' => 1,
            'description' => '連続斬り',
        ],
        [
            'character_id' => 1,
            'skill_masters_id' => 2,
            'level' => 3,
            'expTable' => 2,
            'description' => '回転斬り',
        ],
        [
            'character_id' => 2,
            'skill_masters_id' => 11,
            'level' => 5,
            'expTable' => 1,
            'description' => '高速移動',
        ],
        [
            'character_id' => 2,
            'skill_masters_id' => 12,
            'level' => 3,
            'expTable' => 2,
            'description' => '瞑想',
        ],
        [
            'character_id' => 3,
            'skill_masters_id' => 21,
            'level' => 5,
            'expTable' => 1,
            'description' => '肉体強化',
        ],
        [
            'character_id' => 3,
            'skill_masters_id' => 22,
            'level' => 3,
            'expTable' => 2,
            'description' => '鉄壁',
        ]
      ]);
    }
}
