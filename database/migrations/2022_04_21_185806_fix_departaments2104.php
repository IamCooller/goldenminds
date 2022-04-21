<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class FixDepartaments2104 extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('departament', function (Blueprint $table) {
            $table->text("image_en")->nullable();
            $table->text("image_ru")->nullable();
            $table->text("image_oz")->nullable();
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
        Schema::drop('departament');
    }
}
