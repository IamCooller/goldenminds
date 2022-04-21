<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddFixHome1704 extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('homepage', function (Blueprint $table) {


            $table->text("toptitle_en")->nullable();
            $table->text("toptitle_ru")->nullable();
            $table->text("toptitle_oz")->nullable();
            $table->text("background")->nullable();
            
            
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('homepage', function (Blueprint $table) {
            $table->dropColumn("toptitle_en");
            $table->dropColumn("toptitle_ru");
            $table->dropColumn("toptitle_oz");
            $table->dropColumn("background");
        });
    }
}
