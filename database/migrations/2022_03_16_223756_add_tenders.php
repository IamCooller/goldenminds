<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddTenders extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {


      
        Schema::create('tenders', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->text('content');
            $table->timestamp('publish_at')->nullable();
            $table->text('files')->nullable();
            $table->boolean('open')->nullable();
            $table->string('image', 255);
            $table->timestamp('updated_at')->nullable();
            $table->timestamp('created_at')->nullable();
            
        });
       
       
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('tenders');
    }
}
