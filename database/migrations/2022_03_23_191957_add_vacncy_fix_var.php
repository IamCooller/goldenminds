<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddVacncyFixVar extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('vacancy', function (Blueprint $table) {
            $table->text("title_en")->nullable()->change();
            $table->text("title_oz")->nullable()->change();
            $table->text("title_ru")->nullable()->change();
            $table->text("function_en")->nullable()->change();
            $table->text("function_ru")->nullable()->change();
            $table->text("function_oz")->nullable()->change();
            $table->text("vacancy_desc_en")->nullable()->change();
            $table->text("vacancy_desc_ru")->nullable()->change();
            $table->text("vacancy_desc_oz")->nullable()->change();
            $table->text("requirement_en")->nullable()->change();
            $table->text("requirement_ru")->nullable()->change();
            $table->text("requirement_oz")->nullable()->change();
            $table->text("conditions_en")->nullable()->change();
            $table->text("conditions_ru")->nullable()->change();
            $table->text("conditions_oz")->nullable()->change();
            $table->text("skills_en")->nullable()->change();
            $table->text("skills_ru")->nullable()->change();
            $table->text("skills_oz")->nullable()->change();
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
