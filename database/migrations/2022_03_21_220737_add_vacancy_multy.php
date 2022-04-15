<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddVacancyMulty extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('vacancy', function (Blueprint $table) {
            $table->string("title_en")->nullable();
            $table->string("title_oz")->nullable();
            $table->string("title_ru")->nullable();


            $table->text("vacancy_en")->nullable();
            $table->text("vacancy_oz")->nullable();
            $table->text("vacancy_ru")->nullable();
         
         
            $table->string("vacancy_desc_en")->nullable();
            $table->string("vacancy_desc_ru")->nullable();
            $table->string("vacancy_desc_oz")->nullable();
            $table->string("function_en")->nullable();
            $table->string("function_ru")->nullable();
            $table->string("function_oz")->nullable();
            $table->string("requirement_en")->nullable();
            $table->string("requirement_ru")->nullable();
            $table->string("requirement_oz")->nullable();
            $table->string("conditions_en")->nullable();
            $table->string("conditions_ru")->nullable();
            $table->string("conditions_oz")->nullable();
            $table->string("skills_en")->nullable();
            $table->string("skills_ru")->nullable();
            $table->string("skills_oz")->nullable();
 
            $table->dropColumn('title');
            $table->dropColumn('vacancy');
            $table->dropColumn('vacancy_desc');
            $table->dropColumn('function');
            $table->dropColumn('requirement');
            $table->dropColumn('conditions');
            $table->dropColumn('skills');
  
            
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('vacancy');
    }
}
