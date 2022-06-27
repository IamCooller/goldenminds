<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddFixMainstream2706 extends Migration
{
   


    public function up()
    {
        Schema::table('mainstream', function (Blueprint $table) {
            
            $table->text("title_design_ru")->nullable();
            $table->text("title_design_en")->nullable();
            $table->text("title_design_oz")->nullable();

            $table->text("title_economy_ru")->nullable();
            $table->text("title_economy_en")->nullable();
            $table->text("title_economy_oz")->nullable();

            $table->text("title_consultation_ru")->nullable();
            $table->text("title_consultation_en")->nullable();
            $table->text("title_consultation_oz")->nullable();
            
            $table->text("title_injener_ru")->nullable();
            $table->text("title_injener_oz")->nullable();
            $table->text("title_injener_en")->nullable();
            
            $table->text("title_laboratory_ru")->nullable();
            $table->text("title_laboratory_oz")->nullable();
            $table->text("title_laboratory_en")->nullable();

            $table->text("title_author_ru")->nullable();
            $table->text("title_author_oz")->nullable();
            $table->text("title_author_en")->nullable();

            $table->text("title_stroy_ru")->nullable();
            $table->text("title_stroy_oz")->nullable();
            $table->text("title_stroy_en")->nullable();
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
