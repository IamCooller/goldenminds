<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddFixContacts1704 extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('contact', function (Blueprint $table) {


            $table->text("tel1_en")->nullable();
            $table->text("tel1_ru")->nullable();
            $table->text("tel1_oz")->nullable();

            $table->text("tel2_en")->nullable();
            $table->text("tel2_ru")->nullable();
            $table->text("tel2_oz")->nullable();

            $table->text("email_en")->nullable();
            $table->text("email_ru")->nullable();
            $table->text("email_oz")->nullable();

            $table->text("text_en")->nullable();
            $table->text("text_ru")->nullable();
            $table->text("text_oz")->nullable();

            $table->text("address_en")->nullable();
            $table->text("address_ru")->nullable();
            $table->text("address_oz")->nullable();
            
            $table->dropColumn('tel1');
            $table->dropColumn('tel2');
            $table->dropColumn('email');
            $table->dropColumn('text');
            $table->dropColumn('address');
            
            
        });

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
