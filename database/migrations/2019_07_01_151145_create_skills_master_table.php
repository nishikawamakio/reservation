<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSkillsMasterTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('skills_master', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('skill_name');   /* 技能名 */
            $table->integer('exp_table');   /* 難易度(1:低、2：中、3：高) */
            $table->string('type');         /* 分類   */
            $table->string('description');  /* 説明   */
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
        Schema::dropIfExists('skills_master');
    }
}
