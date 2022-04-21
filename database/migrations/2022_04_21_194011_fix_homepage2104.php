<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class FixHomepage2104 extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('homepage', function (Blueprint $table) {
            $table->text("completed_projects_en")->nullable();
            $table->text("completed_projects_ru")->nullable();
            $table->text("completed_projects_oz")->nullable();

            $table->text("year_market_en")->nullable();
            $table->text("year_market_ru")->nullable();
            $table->text("year_market_oz")->nullable();
 
            $table->text("million_power_en")->nullable();
            $table->text("million_power_ru")->nullable();
            $table->text("million_power_oz")->nullable();

            $table->text("billion_output_en")->nullable();
            $table->text("billion_output_ru")->nullable();
            $table->text("billion_output_oz")->nullable();


            $table->text("task_img_en")->nullable();
            $table->text("task_img_ru")->nullable();
            $table->text("task_img_oz")->nullable();

            $table->text("background_en")->nullable();
            $table->text("background_ru")->nullable();
            $table->text("background_oz")->nullable();

            $table->dropColumn('completed_projects');  
            $table->dropColumn('year_market'); 
            $table->dropColumn('million_power');  
            $table->dropColumn('billion_output');  
            $table->dropColumn('task_img');  
            $table->dropColumn('background');  
            
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
