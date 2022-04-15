<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddIsoMulty extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('iso', function (Blueprint $table) {
            $table->string("title_en")->nullable();
            $table->string("title_oz")->nullable();
            $table->string("title_ru")->nullable();
            $table->text("content_en")->nullable();
            $table->text("content_oz")->nullable();
            $table->text("content_ru")->nullable();
            $table->text("content_design_en")->nullable();
            $table->text("content_design_oz")->nullable();
            $table->text("content_design_ru")->nullable();
            $table->text("content_economy_en")->nullable();
            $table->text("content_economy_oz")->nullable();
            $table->text("content_economy_ru")->nullable();
            $table->string("description_en")->nullable();
            $table->string("description_ru")->nullable();
            $table->string("description_oz")->nullable();
            $table->text("keywords_en")->nullable();
            $table->text("keywords_ru")->nullable();
            $table->text("keywords_oz")->nullable();

            $table->dropColumn('content');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('iso');
    }
}
