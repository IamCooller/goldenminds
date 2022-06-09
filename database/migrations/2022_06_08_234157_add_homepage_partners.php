<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddHomepagePartners extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('homepage', function (Blueprint $table) {
            $table->text('partnresTitle_ru')->nullable();
            $table->text('partnresTitle_en')->nullable();
            $table->text('partnresTitle_oz')->nullable();

            $table->longText('partnresImages_ru')->nullable();
            $table->longText('partnresImages_en')->nullable();
            $table->longText('partnresImages_oz')->nullable();
            
         
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('homepage');
    }
}
