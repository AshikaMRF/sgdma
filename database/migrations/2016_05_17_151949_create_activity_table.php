<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateActivityTable extends Migration
{
   
    public function up()
    {
        Schema::create('activities', function (Blueprint $table) {
            $table->increments('id');
             $table->timestamp('date');
            $table->string('activity_type');
            $table->string('outcome');
              $table->string('sales_person_name');
              $table->timestamps();

           
        });
    }

   
    public function down()
    {
        Schema::drop('activities');
    }
}
