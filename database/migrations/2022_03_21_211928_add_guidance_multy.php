<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddGuidanceMulty extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('guidance', function (Blueprint $table) {
            $table->string("title_en")->nullable();
            $table->string("title_oz")->nullable();
            $table->string("title_ru")->nullable();
            $table->text("content_en")->nullable();
            $table->text("content_oz")->nullable();
            $table->text("content_ru")->nullable();
            $table->text("sketch_en")->nullable();
            $table->text("sketch_oz")->nullable();
            $table->text("sketch_ru")->nullable();
            $table->string("description_en")->nullable();
            $table->string("description_ru")->nullable();
            $table->string("description_oz")->nullable();
            $table->text("keywords_en")->nullable();
            $table->text("keywords_ru")->nullable();
            $table->text("keywords_oz")->nullable();
            $table->string("name_en")->nullable();
            $table->string("name_ru")->nullable();
            $table->string("name_oz")->nullable();
            $table->string("rank_en")->nullable();
            $table->string("rank_ru")->nullable();
            $table->string("rank_oz")->nullable();


            $table->dropColumn('content');
            $table->dropColumn('title');
            $table->dropColumn('keywords');
            $table->dropColumn('name');
            $table->dropColumn('rank');
            $table->dropColumn('sketch');
            
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
