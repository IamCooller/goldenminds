<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateContactTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contact', function (Blueprint $table) {
            $table->increments('id');
            $table->string('tel1');
            $table->string('tel2');
            $table->string('email');
            $table->text('text');
            $table->text('address');
            $table->text('map');
            $table->timestamps();
        });

        DB::table('contact')->insert(
            array(
                'tel1' => ' ',
                'tel2' => ' ',
                'email'=> ' ',
                'text' => ' ',
                'address'=> ' ',
                'map'=> ' '
            )
        );
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('contact');
    }

}
