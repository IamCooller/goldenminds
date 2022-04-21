<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class FixHistory2104 extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('history', function (Blueprint $table) {
            $table->text("images_en")->nullable();
            $table->text("images_ru")->nullable();
            $table->text("images_oz")->nullable();
            $table->text("years_en")->nullable();
            $table->text("years_ru")->nullable();
            $table->text("years_oz")->nullable();
            $table->dropColumn('images');
            $table->dropColumn('years');
            
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('history');
    }
}
