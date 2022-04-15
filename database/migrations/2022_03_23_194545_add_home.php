<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddHome extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
    Schema::create('homePage', function (Blueprint $table) {
        $table->string("title_en")->nullable();
        $table->string("title_oz")->nullable();
        $table->string("title_ru")->nullable();
        $table->string("description_en")->nullable();
        $table->string("description_ru")->nullable();
        $table->string("description_oz")->nullable();
        $table->text("keywords_en")->nullable();
        $table->text("keywords_ru")->nullable();
        $table->text("keywords_oz")->nullable();

        $table->text("h1_en")->nullable();
        $table->text("h1_ru")->nullable();
        $table->text("h1_oz")->nullable();

        $table->string("completed_projects")->nullable();
        $table->string("year_market")->nullable();
        $table->string("million_power")->nullable();
        $table->string("billion_output")->nullable();
        
        $table->text("about_en")->nullable();
        $table->text("about_ru")->nullable();
        $table->text("about_oz")->nullable();

         

        $table->text("mission_en")->nullable();
        $table->text("mission_oz")->nullable();
        $table->text("mission_ru")->nullable();


        $table->text("compitence_1_en")->nullable();
        $table->text("compitence_1_oz")->nullable();
        $table->text("compitence_1_ru")->nullable();
        
        $table->text("compitence_2_en")->nullable();
        $table->text("compitence_2_oz")->nullable();
        $table->text("compitence_2_ru")->nullable();

        $table->text("compitence_3_en")->nullable();
        $table->text("compitence_3_oz")->nullable();
        $table->text("compitence_3_ru")->nullable();

         $table->text("task_1_en")->nullable();
        $table->text("task_1_oz")->nullable();
        $table->text("task_1_ru")->nullable();
        $table->text("task_2_en")->nullable();
        $table->text("task_2_oz")->nullable();
        $table->text("task_2_ru")->nullable();
        $table->text("task_3_en")->nullable();
        $table->text("task_3_oz")->nullable();
        $table->text("task_3_ru")->nullable();
        $table->text("task_4_en")->nullable();
        $table->text("task_4_oz")->nullable();
        $table->text("task_4_ru")->nullable();
        $table->text("task_5_en")->nullable();
        $table->text("task_5_oz")->nullable();
        $table->text("task_5_ru")->nullable();
        
        $table->text("task_img")->nullable();
    });
}

/**
 * Reverse the migrations.
 *
 * @return void
 */
public function down()
{
    Schema::drop('homePage');
}
}
