<?php

use Illuminate\Database\Seeder;

class ExperiencePointMaseterTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('experience_point_maseter')->insert([
        [
            'level1' => 10,
            'level2' => 50,
            'level3' => 100,
            'level4' => 200,
            'level5' => 300,
            'level6' => 450,
            'level7' => 700,
        ]
      ]);
    }
}
