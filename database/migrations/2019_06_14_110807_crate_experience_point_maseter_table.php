<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CrateExperiencePointMaseterTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('experience_point_maseter', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('level1');
            $table->integer('level2');
            $table->integer('level3');
            $table->integer('level4');
            $table->integer('level5');
            $table->integer('level6');
            $table->integer('level7');
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
        Schema::dropIfExists('experience_point_maseter');
    }
}
