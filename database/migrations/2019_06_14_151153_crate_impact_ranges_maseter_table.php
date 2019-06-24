<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CrateImpactRangesMaseterTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // 有効範囲テーブル
        Schema::create('impact_ranges_maseter', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('impact_ranges_name');    /* 影響範囲種別名  */
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
        Schema::dropIfExists('impact_ranges_maseter');
    }
}
