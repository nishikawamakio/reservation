<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CrateMagicsMaseterTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        //魔法マスタテーブル
        Schema::create('magics_maseter', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('magic_type_name');    /* 魔法種別名  */
            $table->integer('magic_level');       /* 魔法レベル  */
            $table->integer('range_type_id');     /* 射程種別    */
            $table->integer('impact_range_id');   /* 有効範囲    */
            $table->integer('impact_time');       /* 効果時間    */
            $table->integer('consumption_point'); /* 消費MP      */
            $table->integer('necessary_point');   /* 必要経験値  */
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
        Schema::dropIfExists('magics_maseter');
    }
}
