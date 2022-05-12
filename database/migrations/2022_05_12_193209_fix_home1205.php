<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class FixHome1205 extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('homepage', function (Blueprint $table) {
            $table->text('section_completed_projects_ru')->nullable();
            $table->text('section_completed_projects_en')->nullable();
            $table->text('section_completed_projects_oz')->nullable();

            
            $table->text('section_year_market_ru')->nullable();
            $table->text('section_year_market_en')->nullable();
            $table->text('section_year_market_oz')->nullable();

            $table->text('section_million_power_ru')->nullable();
            $table->text('section_million_power_en')->nullable();
            $table->text('section_million_power_oz')->nullable();

            $table->text('section_billion_output_ru')->nullable();
            $table->text('section_billion_output_en')->nullable();
            $table->text('section_billion_output_oz')->nullable();
            
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('homepage');
    }
}
