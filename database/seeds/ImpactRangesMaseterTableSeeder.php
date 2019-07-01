<?php

use Illuminate\Database\Seeder;

class ImpactRangesMaseterTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('impact_ranges_maseter')->insert([
        [
            'impact_ranges_name' => '1マス'
        ],
        [
            'impact_ranges_name' => '周囲1マス'
        ],
        [
            'impact_ranges_name' => '周囲5マス'
        ]
      ]);
    }
}
