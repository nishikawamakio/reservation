<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CrateMysterysMaseterTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // 奥義マスタテーブル
        Schema::create('mysterys_maseter', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('mysterys_type_name');       /* 奥義種別名 */
            $table->integer('range_type_id');           /* 射程種別   */
            $table->integer('impact_range_id');         /* 有効範囲   */
            $table->integer('prerequisites_type');      /* 前提条件   */
            $table->integer('consumption_point');       /* 消費MP     */
            $table->integer('consumption_ster_point');  /* 消費MP     */
            $table->integer('necessary_point');         /* 必要経験値 */
            $table->string('description');              /* 説明       */
            $table->rememberToken();
            $table->timestamps();
            /* 前提条件は設定ファイルでいいんでない、DBにしても意味ないし */
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
        Schema::dropIfExists('mysterys_maseter');
    }
}
