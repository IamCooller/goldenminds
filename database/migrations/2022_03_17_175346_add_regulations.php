<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddRegulations extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {   
    Schema::create('regulations', function (Blueprint $table) {
        $table->increments('id');
        $table->string('tab');
        $table->string('title');
        $table->text('file');
        $table->string('regist');
        $table->string('number');
        $table->timestamp('publish_at')->nullable();
        $table->timestamp('updated_at')->nullable();
        $table->timestamp('created_at')->nullable();
        
    });    //
}

/**
 * Reverse the migrations.
 *
 * @return void
 */
public function down()
{
    Schema::table('regulations', function (Blueprint $table) {
        //
    });

}
}
