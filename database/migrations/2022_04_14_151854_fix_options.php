<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class FixOptions extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('options', function (Blueprint $table) {
            $table->text("graph_en")->nullable();
            $table->text("graph_ru")->nullable();
            $table->text("graph_oz")->nullable();

            $table->dropColumn('graph');
            
            $table->text("address_en")->nullable();
            $table->text("address_ru")->nullable();
            $table->text("address_oz")->nullable();

            $table->dropColumn('address');

            $table->text("tel1_en")->nullable();
            $table->text("tel1_ru")->nullable();
            $table->text("tel1_oz")->nullable();

            $table->dropColumn('tel1');

            $table->text("tel2_en")->nullable();
            $table->text("tel2_ru")->nullable();
            $table->text("tel2_oz")->nullable();

            $table->dropColumn('tel2');

            $table->text("email_en")->nullable();
            $table->text("email_ru")->nullable();
            $table->text("email_oz")->nullable();

            $table->dropColumn('email');

            $table->text("emailVac")->nullable();
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
