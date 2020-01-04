<?php

use Illuminate\Database\Seeder;

class ItemsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('items')->insert([
        [
            'character_id' => 1,
            'item_masters_id' => 1,
            'item_name' => '薬草',
            'description' => '体力を10回復する',
        ],
        [
            'character_id' => 2,
            'item_masters_id' => 3,
            'item_name' => 'MPポーション',
            'description' => 'MPを50回復する',
        ],
        [
            'character_id' => 3,
            'item_masters_id' => 2,
            'item_name' => 'HPポーション',
            'description' => '体力を30回復する',
        ]
      ]);
    }
}
