<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CrateItemsMaseterTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        // 武器マスターテーブル
        Schema::create('items_master', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('item_type_name');   /* 道具種別名 */
            $table->integer('impact_range_id'); /* 効果範囲   */
            $table->integer('effect_time');     /* 効果時間   */
            $table->integer('use_count');       /* 使用回数   */
            $table->integer('consumption_gp');  /* 消費GP     */
            $table->string('description');      /* 説明       */
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
        Schema::dropIfExists('items_master');
    }
}
