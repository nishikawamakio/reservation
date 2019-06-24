<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CrateWeaponsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //武器テーブル
        Schema::create('weapons', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('character_id');
            $table->integer('weapon_masters_id');   /* アーキタイプID */
            $table->string('weapon_name');          /* 武器名         */
            $table->integer('damage');              /* ダメージ補正   */
            $table->integer('hit');                 /* 命中補正       */
            $table->integer('addition_type');       /* 付加効果タイプ */
            $table->integer('addition_level');      /* 付加効果レベル */
            $table->string('description');          /* 説明           */
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
        Schema::dropIfExists('weapons');
    }
}
