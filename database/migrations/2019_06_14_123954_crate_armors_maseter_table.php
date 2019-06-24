<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CrateArmorsMaseterTable extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        //
        Schema::create('armors_maseter', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('armors_type_name');        /* 防具種別名 */
            $table->integer('required_strength');      /* 必要筋力   */
            $table->integer('required_dexterity');     /* 必要器用   */
            $table->integer('required_intelligence');  /* 必要知力   */
            $table->integer('evasion');                /* 回避       */
            $table->integer('impact_gurad');           /* 衝撃防御   */
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        //
        Schema::dropIfExists('armors_maseter');
    }
}
