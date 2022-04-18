<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddFixHome1804 extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('options', function (Blueprint $table) {
            $table->text("blogo_en")->nullable();
            $table->text("blogo_ru")->nullable();
            $table->text("blogo_oz")->nullable();
            $table->text("slogo_en")->nullable();
            $table->text("slogo_ru")->nullable();
            $table->text("slogo_oz")->nullable();

        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('options');
    }
}
