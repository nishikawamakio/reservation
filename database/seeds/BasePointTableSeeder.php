<?php

use Illuminate\Database\Seeder;

class BasePointTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('impact_base_points')->insert([
        [
            'base_point' => 50,
        ]
      ]);
    }
}
