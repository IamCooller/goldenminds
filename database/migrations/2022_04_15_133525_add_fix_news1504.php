<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddFixNews1504 extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
  Schema::table('news', function (Blueprint $table) {
        $table->text("images")->nullable()->change();
    });

}

/**
 * Reverse the migrations.
 *
 * @return void
 */
public function down()
{
    Schema::drop('news');
}
}
