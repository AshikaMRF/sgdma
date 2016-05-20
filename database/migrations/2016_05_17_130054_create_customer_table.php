<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCustomerTable extends Migration
{
    

    public function up()
    {
        Schema::create('customers', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('company_name');
            $table->string('br_no');
            $table->string('websitess');
            $table->timestamps();
        });
        
    }

    
    public function down()
    {
     
     Schema::drop('customers');

    }
}
