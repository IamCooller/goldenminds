<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddFixStructurs1504 extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('structura', function (Blueprint $table) {


            $table->text("image_en")->nullable();
            $table->text("image_ru")->nullable();
            $table->text("image_oz")->nullable();

            $table->text("link_en")->nullable();
            $table->text("link_ru")->nullable();
            $table->text("link_oz")->nullable();

            $table->text("tabs_en")->nullable();
            $table->text("tabs_ru")->nullable();
            $table->text("tabs_oz")->nullable();

            $table->dropColumn('image');
            $table->dropColumn('link');
            $table->dropColumn('tabs');

        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('structura');
    }
}
