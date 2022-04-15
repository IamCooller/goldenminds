<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddFixRegulationce extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('regulations', function (Blueprint $table) {


            $table->text("file_en")->nullable();
            $table->text("file_ru")->nullable();
            $table->text("file_oz")->nullable();

            $table->text("title_en")->nullable();
            $table->text("title_ru")->nullable();
            $table->text("title_oz")->nullable();

            $table->text("number_en")->nullable();
            $table->text("number_ru")->nullable();
            $table->text("number_oz")->nullable();

            $table->dropColumn('file');
            $table->dropColumn('title');
            $table->dropColumn('number');

        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('regulations');
    }
}
