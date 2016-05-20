<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddColumnActivity extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('activities', function (Blueprint $table) {
         $table->string('customer_name');
        });
    }

    public function down()
    {
        Schema::table('activities', function (Blueprint $table) {
            $table->dropColumn('customer_name');
        });
    }
}
