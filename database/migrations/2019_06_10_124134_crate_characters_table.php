<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CrateCharactersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('characters', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('user_id');
            $table->string('icon_image');/* s3 */
            /* userの経験値から減算して計算する */
            $table->bigInteger('use_exp');
            /* ----プロフィール---- */
            $table->string('name');         /* 名前 */
            $table->string('race');         /* 種族 */
            $table->string('sex');          /* 性別 */
            $table->string('age');          /* 年齢 */
            $table->string('profession');   /* 職業 */
            $table->string('hair_color');   /* 髪色 */
            $table->string('eye_coller');   /* 目色 */
            $table->string('height');       /* 身長 */
            $table->string('body_weight');  /* 体重 */
            $table->string('appearance');   /* 外見 */
            $table->string('personality');  /* 性格 */
            $table->string('background');   /* 背景 */
            /* ----能力---- */
            $table->integer('strength');    /* 筋力 */
            $table->integer('physical');    /* 体力 */
            $table->integer('agile');       /* 敏捷 */
            $table->integer('dexterity');   /* 器用 */
            $table->integer('intelligence');/* 知力 */
            $table->integer('spirit');      /* 精神 */
            $table->integer('search');      /* 技能 */
            $table->integer('hit_point');   /* HP   */
            $table->integer('magic_point'); /* MP   */
            $table->integer('resistance');  /* 抵抗 */
            $table->integer('magic');       /* 魔力 */
            $table->integer('special');     /* 特技 */
            /* ----指標---- */
            $table->integer('publicity');
            $table->integer('honor');
            $table->integer('seter');
            /* ----バトルポリシ---- */
            $table->string('first_role');   /* プライマリロール */
            $table->string('second_role');  /* セカンダリロール */
            $table->string('third_role');   /* ターシャリロール */
            $table->string('gp');           /* お金             */
            /* 技能は別テーブル */
            /* 魔法は別テーブル */
            /* 奥義は別テーブル */
            /* 武器は別テーブル */
            /* 防具は別テーブル */
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
        Schema::dropIfExists('characters');
    }
}
