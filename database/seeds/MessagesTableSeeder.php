<?php

use Illuminate\Database\Seeder;

class MessagesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        for($bodyCount = 1;$bodyCount <= 10;$bodyCount++) {
            \App\Message::create([
                'boardNumber' => 1,
                'user_id' => 1,
                'character_id' => 1,
                'body' => $bodyCount .'番目のテキスト'
            ]);
        }
    }
}
