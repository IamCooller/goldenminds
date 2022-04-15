<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddDepartementMulty extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('departament', function (Blueprint $table) {
            $table->string("title_en")->nullable();
            $table->string("title_oz")->nullable();
            $table->string("title_ru")->nullable();
            $table->string("description_en")->nullable();
            $table->string("description_ru")->nullable();
            $table->string("description_oz")->nullable();
            $table->text("keywords_en")->nullable();
            $table->text("keywords_ru")->nullable();
            $table->text("keywords_oz")->nullable();

            $table->text("content_en")->nullable();
            $table->text("content_oz")->nullable();
            $table->text("content_ru")->nullable();
         
         
            $table->string("name_en")->nullable();
            $table->string("name_ru")->nullable();
            $table->string("name_oz")->nullable();
            $table->string("subname_en")->nullable();
            $table->string("subname_ru")->nullable();
            $table->string("subname_oz")->nullable();
            $table->string("task_en")->nullable();
            $table->string("task_ru")->nullable();
            $table->string("task_oz")->nullable();
            $table->string("function_en")->nullable();
            $table->string("function_ru")->nullable();
            $table->string("function_oz")->nullable();
 
            $table->dropColumn('title');
            $table->dropColumn('name');
            $table->dropColumn('titlePage');
            $table->dropColumn('subtitle');
            $table->dropColumn('keywords');
            $table->dropColumn('description');
            $table->dropColumn('task');
            $table->dropColumn('function');
            
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('departament');
    }
}
