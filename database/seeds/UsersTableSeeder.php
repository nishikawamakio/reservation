<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('users')->insert([
        [
          'name' => 'テスト名前01',
          'email' => 'test01@gmail.com',
          'email_verified_at' => null,
          'password' => 'test',
          'user_exp' => 100,
          'user_gp' => 100,
          'publicity_not_istributed_point' => 100,
          'honor_not_istributed_point' => 100,
          'mission_flag' => 0,
        ],
        [
          'name' => 'テスト名前02',
          'email' => 'test02@gmail.com',
          'email_verified_at' => null,
          'password' => 'test',
          'user_exp' => 200,
          'user_gp' => 200,
          'publicity_not_istributed_point' => 200,
          'honor_not_istributed_point' => 200,
          'mission_flag' => 1,
        ],
        [
          'name' => 'テスト名前03',
          'email' => 'test03@gmail.com',
          'email_verified_at' => null,
          'password' => 'test',
          'user_exp' => 300,
          'user_gp' => 300,
          'publicity_not_istributed_point' => 300,
          'honor_not_istributed_point' => 300,
          'mission_flag' => 0,
        ]
      ]);
    }
}
