<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CrateWeaponsMaseterTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // 武器マスターテーブル
        Schema::create('weapons_maseter', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('weapons_type_name');        /* 武器種別名 */
            $table->integer('required_strength');       /* 必要筋力   */
            $table->integer('required_dexterity');      /* 必要器用   */
            $table->integer('required_intelligence');   /* 必要知力   */
            $table->integer('damage');                  /* 攻撃補正   */
            $table->integer('hit');                     /* 命中補正   */
            $table->string('description');              /* 説明       */
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
        Schema::dropIfExists('weapons_maseter');
    }
}
