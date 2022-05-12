<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class FixStructurs1205 extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('structura', function (Blueprint $table) {
            $table->text('instruction_ru')->nullable();
            $table->text('instruction_en')->nullable();
            $table->text('instruction_oz')->nullable();


            
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('structura');
    }
}
