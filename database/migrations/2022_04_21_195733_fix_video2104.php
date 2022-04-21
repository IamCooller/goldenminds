<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class FixVideo2104 extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('videogallery', function (Blueprint $table) {
            $table->text("title_en")->nullable();
            $table->text("title_ru")->nullable();
            $table->text("title_oz")->nullable();

            $table->text("image_ru")->nullable();
            $table->text("image_en")->nullable();
            $table->text("image_oz")->nullable();

            $table->text("iamges_ru")->nullable();
            $table->text("images_en")->nullable();
            $table->text("images_oz")->nullable();

            
            $table->text("date_ru")->nullable();
            $table->text("date_en")->nullable();
            $table->text("date_oz")->nullable();


            $table->dropColumn('title');  
            $table->dropColumn('image'); 
            $table->dropColumn('images');  
            $table->dropColumn('data');  

            
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('videogallery');
    }
}
