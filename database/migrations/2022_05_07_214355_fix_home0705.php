<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class FixHome0705 extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('homepage', function (Blueprint $table) {


            $table->text("realizedTitle_ru")->nullable();
            $table->text("realizedTitle_oz")->nullable();
            $table->text("realizedTitle_en")->nullable();

            $table->text("aboutTitle_ru")->nullable();
            $table->text("aboutTitle_oz")->nullable();
            $table->text("aboutTitle_en")->nullable();
            
            $table->text("missionTitle_ru")->nullable();
            $table->text("missionTitle_oz")->nullable();
            $table->text("missionTitle_en")->nullable();

            $table->text("richTitle_ru")->nullable();
            $table->text("richTitle_oz")->nullable();
            $table->text("richTitle_en")->nullable();

            $table->text("leadersTitle_ru")->nullable();
            $table->text("leadersTitle_oz")->nullable();
            $table->text("leadersTitle_en")->nullable();

            $table->text("newsTitle_ru")->nullable();
            $table->text("newsTitle_oz")->nullable();
            $table->text("newsTitle_en")->nullable();

            $table->text("contactTitle_ru")->nullable();
            $table->text("contactTitle_oz")->nullable();
            $table->text("contactTitle_en")->nullable();
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('homepage');
    }
}
