<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class FixTenders2104 extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('tenders', function (Blueprint $table) {
            $table->text("files_en")->nullable();
            $table->text("files_ru")->nullable();
            $table->text("files_oz")->nullable();
           
            $table->text("open_en")->nullable();
            $table->text("open_ru")->nullable();
            $table->text("open_oz")->nullable();
             
            $table->text("image_en")->nullable();
            $table->text("image_ru")->nullable();
            $table->text("image_oz")->nullable();
 
            $table->dropColumn('files');  
            $table->dropColumn('open'); 
            $table->dropColumn('image');  
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('tenders');
    }
}
