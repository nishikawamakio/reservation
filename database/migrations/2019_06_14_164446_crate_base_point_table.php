<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CrateBasePointTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        // ユーザポイントテーブル
        Schema::create('impact_base_points', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('base_point');    /* 登録時に配られる基礎ポイント */
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
        Schema::dropIfExists('impact_base_points');
    }
}
