<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddDepartementFix2 extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('departament', function (Blueprint $table) {
            $table->text("subname_en")->nullable()->change();
            $table->text("subname_ru")->nullable()->change();
            $table->text("subname_oz")->nullable()->change();
            $table->text("task_en")->nullable()->change();
            $table->text("task_ru")->nullable()->change();
            $table->text("task_oz")->nullable()->change();
            $table->text("function_en")->nullable()->change();
            $table->text("function_ru")->nullable()->change();
            $table->text("function_oz")->nullable()->change();
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
