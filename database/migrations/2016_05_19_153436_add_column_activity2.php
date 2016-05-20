<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddColumnActivity2 extends Migration
{
    public function up()
    {
        Schema::table('activities', function (Blueprint $table) {
             $table->string('_token');
        });
    }

    public function down()
    {
        Schema::table('activities', function (Blueprint $table) {
            $table->dropColumn('_token');
        });
    }
}
