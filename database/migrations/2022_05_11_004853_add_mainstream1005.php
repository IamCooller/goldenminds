<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddMainstream1005 extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('mainstream', function (Blueprint $table) {
            $table->text("content_injener_ru")->nullable();
            $table->text("content_injener_oz")->nullable();
            $table->text("content_injener_en")->nullable();
            
            $table->text("content_laboratory_ru")->nullable();
            $table->text("content_laboratory_oz")->nullable();
            $table->text("content_laboratory_en")->nullable();

            $table->text("content_author_ru")->nullable();
            $table->text("content_author_oz")->nullable();
            $table->text("content_author_en")->nullable();

            $table->text("content_stroy_ru")->nullable();
            $table->text("content_stroy_oz")->nullable();
            $table->text("content_stroy_en")->nullable();
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('mainstream');
    }
}
