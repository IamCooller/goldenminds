<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class FixProjects2104 extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('projects', function (Blueprint $table) {
            $table->text("image_en")->nullable();
            $table->text("image_ru")->nullable();
            $table->text("image_oz")->nullable();

            $table->text("images_en")->nullable();
            $table->text("images_ru")->nullable();
            $table->text("images_oz")->nullable();

            $table->text("years_en")->nullable();
            $table->text("years_ru")->nullable();
            $table->text("years_oz")->nullable();

            $table->text("power_en")->nullable();
            $table->text("power_ru")->nullable();
            $table->text("power_oz")->nullable();

            $table->text("status_en")->nullable();
            $table->text("status_ru")->nullable();
            $table->text("status_oz")->nullable();

            $table->text("category_en")->nullable();
            $table->text("category_ru")->nullable();
            $table->text("category_oz")->nullable();

            $table->text("countagrs_en")->nullable();
            $table->text("countagrs_ru")->nullable();
            $table->text("countagrs_oz")->nullable();

            $table->text("watter_en")->nullable();
            $table->text("watter_ru")->nullable();
            $table->text("watter_oz")->nullable();
            
            $table->text("output_en")->nullable();
            $table->text("output_ru")->nullable();
            $table->text("output_oz")->nullable();

            $table->dropColumn('image');  
            $table->dropColumn('years'); 
            $table->dropColumn('power');  
            $table->dropColumn('status'); 
            $table->dropColumn('category'); 
            $table->dropColumn('images'); 
            $table->dropColumn('countagrs'); 
            $table->dropColumn('watter'); 
            $table->dropColumn('output'); 
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('projects');
    }
}
