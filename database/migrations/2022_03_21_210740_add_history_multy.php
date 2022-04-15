<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddHistoryMulty extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('history', function (Blueprint $table) {
            $table->string("name_en")->nullable();
            $table->string("name_oz")->nullable();
            $table->string("name_ru")->nullable();
            $table->text("content_en")->nullable();
            $table->text("content_oz")->nullable();
            $table->text("content_ru")->nullable();
            $table->dropColumn('content');
            $table->dropColumn('title');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('history');
    }
}
