<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddMainstramsFix6 extends Migration
{
    public function up()
    {
        Schema::table('mainstream', function (Blueprint $table) {
            $table->dropColumn('content_economy');
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
