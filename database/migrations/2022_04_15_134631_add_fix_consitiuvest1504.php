<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddFixConsitiuvest1504 extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('constitutive', function (Blueprint $table) {


            $table->text("title_en")->nullable();
            $table->text("title_ru")->nullable();
            $table->text("title_oz")->nullable();

            $table->text("file_en")->nullable();
            $table->text("file_ru")->nullable();
            $table->text("file_oz")->nullable();


            $table->dropColumn('title');
            $table->dropColumn('file');
    

        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('constitutive');
    }
}
