<?php

use Illuminate\Database\Seeder;

class ItemsMaseterTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('items_master')->insert([
        [
            'item_type_name' => '体力回復10',
            'impact_range_id' => 1,
            'effect_time' => 1,
            'use_count' => 1,
            'consumption_gp' => 10,
            'description' => '体力を10回復する',
        ],
        [
            'item_type_name' => '体力回復30',
            'impact_range_id' => 1,
            'effect_time' => 1,
            'use_count' => 1,
            'consumption_gp' => 30,
            'description' => '体力を30回復する',
        ],
        [
            'item_type_name' => 'MP回復50',
            'impact_range_id' => 1,
            'effect_time' => 1,
            'use_count' => 1,
            'consumption_gp' => 50,
            'description' => 'MPを50回復する',
        ],
      ]);
    }
}
