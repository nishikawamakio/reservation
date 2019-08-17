<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AlterMagicsMaster extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::rename('magics_maseter', 'magics_master');
        Schema::table('magics_master', function (Blueprint $table) {
            $table->integer('impact_value')->after('impact_range_id'); /* 効果時間    */
            $table->renameColumn('impact_time', 'impact_time_unit');   /* 単位時間    */
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::rename('magics_master', 'magics_maseter');
        Schema::table('magics_maseter', function (Blueprint $table) {
            $table->dropColumn('impact_value');
            $table->renameColumn('impact_time_unit', 'impact_time');   /* 単位時間    */
        });
    }
}
