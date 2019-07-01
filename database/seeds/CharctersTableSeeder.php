<?php

use Illuminate\Database\Seeder;

class CharactersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('characters')->insert([
        [
          'user_id' => 1,
          'icon_image' => 'test_icon01.png',
          'use_exp' => 100,
          /* ----プロフィール---- */
          'name' => 'テストユーザ01',
          'race' => '人間',
          'sex' => '男',
          'age' => '20',
          'profession' => '剣士',
          'hair_color' => '黒',
          'eye_coller' => '黒',
          'height' => '170',
          'body_weight' => '65',
          'appearance' => '普通',
          'personality' => '優しい',
          'background' => 'パターン01',
          /* ----能力---- */
          'strength' => 10,
          'physical' => 10,
          'agile' => 10,
          'dexterity' => 10,
          'intelligence' => 10,
          'spirit' => 10,
          'search' => 10,
          'hit_point' => 100,
          'magic_point' => 100,
          'resistance' => 10,
          'magic' => 10,
          'special' => 10,
          /* ----指標---- */
          'publicity' => 50,
          'honor' => 50,
          'seter' => 50,
          /* ----バトルポリシ---- */
          'first_role' => 'アタッカー',
          'second_role' => 'メレー',
          'third_role' => 'レンジ',
          'gp' => '100',
        ],
        [
          'user_id' => 2,
          'icon_image' => 'test_icon02.png',
          'use_exp' => 100,
          /* ----プロフィール---- */
          'name' => 'テストユーザ02',
          'race' => 'エルフ',
          'sex' => '女',
          'age' => '18',
          'profession' => '魔法使い',
          'hair_color' => '青',
          'eye_coller' => '青',
          'height' => '165',
          'body_weight' => '45',
          'appearance' => '細い',
          'personality' => '穏やか',
          'background' => 'パターン02',
          /* ----能力---- */
          'strength' => 5,
          'physical' => 5,
          'agile' => 5,
          'dexterity' => 20,
          'intelligence' => 20,
          'spirit' => 20,
          'search' => 20,
          'hit_point' => 80,
          'magic_point' => 150,
          'resistance' => 5,
          'magic' => 20,
          'special' => 15,
          /* ----指標---- */
          'publicity' => 50,
          'honor' => 50,
          'seter' => 50,
          /* ----バトルポリシ---- */
          'first_role' => 'アタッカー',
          'second_role' => 'メイジ',
          'third_role' => 'ニューカー',
          'gp' => '100',
        ],
        [
          'user_id' => 3,
          'icon_image' => 'test_icon03.png',
          'use_exp' => 100,
          /* ----プロフィール---- */
          'name' => 'テストユーザ03',
          'race' => 'ドワーフ',
          'sex' => '男',
          'age' => '35',
          'profession' => '戦士',
          'hair_color' => '茶',
          'eye_coller' => '茶',
          'height' => '130',
          'body_weight' => '90',
          'appearance' => 'がっしり',
          'personality' => '気さく',
          'background' => 'パターン03',
          /* ----能力---- */
          'strength' => 30,
          'physical' => 30,
          'agile' => 30,
          'dexterity' => 5,
          'intelligence' => 5,
          'spirit' => 5,
          'search' => 5,
          'hit_point' => 200,
          'magic_point' => 50,
          'resistance' => 20,
          'magic' => 10,
          'special' => 5,
          /* ----指標---- */
          'publicity' => 50,
          'honor' => 50,
          'seter' => 50,
          /* ----バトルポリシ---- */
          'first_role' => 'タンク',
          'second_role' => 'タンク',
          'third_role' => 'タンク',
          'gp' => '100',
        ]
      ]);
    }
}
