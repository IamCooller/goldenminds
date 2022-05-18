<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddOptions1805 extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('options', function (Blueprint $table) {
            $table->text('popupGerbTitle_ru')->nullable();
            $table->text('popupGerbTitle_en')->nullable();
            $table->text('popupGerbTitle_oz')->nullable();

            $table->text('popupFlagTitle_ru')->nullable();
            $table->text('popupFlagTitle_en')->nullable();
            $table->text('popupFlagTitle_oz')->nullable();

            $table->text('popupGimnTitle_ru')->nullable();
            $table->text('popupGimnTitle_en')->nullable();
            $table->text('popupGimnTitle_oz')->nullable();

            $table->text('popupGimnImage_ru')->nullable();
            $table->text('popupGimnImage_en')->nullable();
            $table->text('popupGimnImage_oz')->nullable();

            $table->text('popupGerbImage_ru')->nullable();
            $table->text('popupGerbImage_en')->nullable();
            $table->text('popupGerbImage_oz')->nullable();

            $table->text('popupFlagImage_ru')->nullable();
            $table->text('popupFlagImage_en')->nullable();
            $table->text('popupFlagImage_oz')->nullable();
            
            $table->text('popupGerb_ru')->nullable();
            $table->text('popupGerb_en')->nullable();
            $table->text('popupGerb_oz')->nullable();

            $table->text('popupFlag_ru')->nullable();
            $table->text('popupFlag_en')->nullable();
            $table->text('popupFlag_oz')->nullable();

            $table->text('popupGimn_ru')->nullable();
            $table->text('popupGimn_en')->nullable();
            $table->text('popupGimn_oz')->nullable();
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('options');
    }
}
