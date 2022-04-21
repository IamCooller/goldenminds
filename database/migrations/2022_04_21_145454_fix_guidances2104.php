<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class FixGuidances2104 extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('guidance', function (Blueprint $table) {
            $table->text("image_en")->nullable();
            $table->text("image_ru")->nullable();
            $table->text("image_oz")->nullable();

            $table->text("category_en")->nullable();
            $table->text("category_ru")->nullable();
            $table->text("category_oz")->nullable();
            $table->dropColumn('image');
            $table->dropColumn('category');
            

        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('guidance');
    }
}
