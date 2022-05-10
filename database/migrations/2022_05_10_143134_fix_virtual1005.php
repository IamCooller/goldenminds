<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class FixVirtual1005 extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('virtual', function (Blueprint $table) {
            $table->text("image_ru")->nullable();
            $table->text("image_oz")->nullable();
            $table->text("image_en")->nullable();
            
            $table->text("subimage_ru")->nullable();
            $table->text("subimage_oz")->nullable();
            $table->text("subimage_en")->nullable();
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('virtual');
    }
}
