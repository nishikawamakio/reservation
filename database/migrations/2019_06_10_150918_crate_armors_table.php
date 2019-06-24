<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CrateArmorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('armors', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('character_id');
            $table->integer('armor_masters_id');
            $table->string('armor_name');
            $table->integer('addition_type');   /* 付加効果種別   */
            $table->integer('addition_level');  /* 付加効果レベル */
            $table->integer('evasion');         /* 回避           */
            $table->integer('impact_gurad');    /* 衝撃防御       */
            $table->integer('flame_guard');     /* 炎熱防御       */
            $table->integer('ice_guard');       /* 氷冷防御       */
            $table->integer('lightning_guard'); /* 雷防御         */
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
        Schema::dropIfExists('armors');
    }
}
