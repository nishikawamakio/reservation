<?php

use Illuminate\Database\Seeder;

class TimeUnitsMasterTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('time_units_master')->insert([
        [
            'id' => 1,
            'name' => '即時',
            'type' => 'standard',
        ],
        [
            'id' => 2,
            'name' => '一瞬',
            'type' => 'standard',
        ],
        [
            'id' => 3,
            'name' => '精神集中の限り',
            'type' => 'standard',
        ],
        [
            'id' => 4,
            'name' => '永続',
            'type' => 'standard',
        ],
        [
            'id' => 5,
            'name' => 'その他',
            'type' => 'standard',
        ],
        [
            'id' => 11,
            'name' => '秒間',
            'type' => 'seconds',
        ],
        [
            'id' => 12,
            'name' => '[魔力×2]秒間',
            'type' => 'seconds',
        ],
        [
            'id' => 21,
            'name' => '分間（ターン）',
            'type' => 'minutes',
        ],
        [
            'id' => 22,
            'name' => '[魔力]分間（ターン）',
            'type' => 'minutes',
        ],
        [
            'id' => 23,
            'name' => '[魔力×2]分間（ターン）',
            'type' => 'minutes',
        ],
        [
            'id' => 24,
            'name' => '[魔力÷5（端数切上げ）]分間（ターン）',
            'type' => 'minutes',
        ],
        [
            'id' => 31,
            'name' => '時間',
            'type' => 'hours',
        ],
        [
            'id' => 32,
            'name' => '[魔力÷2（端数切上げ）]時間',
            'type' => 'hours',
        ],
        [
            'id' => 41,
            'name' => '週間',
            'type' => 'weeks',
        ],
      ]);
    }
}
