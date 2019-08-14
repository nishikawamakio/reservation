<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AlterImpactRangeMaster extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::rename('impact_ranges_maseter', 'impact_ranges_master');
        Schema::create('impact_ranges_master', function (Blueprint $table) {
            $table->renameColumn('impact_ranges_name', 'name');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::rename('impact_ranges_master', 'impact_ranges_maseter');
        Schema::create('impact_ranges_maseter', function (Blueprint $table) {
            $table->renameColumn('name', 'impact_ranges_name');
        });
    }
}
