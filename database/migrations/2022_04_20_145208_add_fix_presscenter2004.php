<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddFixPresscenter2004 extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('news', function (Blueprint $table) {


            $table->text("author_en")->nullable();
            $table->text("author_ru")->nullable();
            $table->text("author_oz")->nullable();

            $table->text("date_en")->nullable();
            $table->text("date_ru")->nullable();
            $table->text("date_oz")->nullable();

            $table->text("image_en")->nullable();
            $table->text("image_ru")->nullable();
            $table->text("image_oz")->nullable();

            $table->text("images_en")->nullable();
            $table->text("images_ru")->nullable();
            $table->text("images_oz")->nullable();

            $table->dropColumn('author');
            $table->dropColumn('date');
            $table->dropColumn('image');
            $table->dropColumn('images');

        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('news');
    }
}
