<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class FixIso2104 extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('iso', function (Blueprint $table) {
            $table->text("images_en")->nullable();
            $table->text("images_ru")->nullable();
            $table->text("images_oz")->nullable();
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
        Schema::drop('iso');
    }
}
