<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    protected $fillable=['customer_name',
           'company_name','company_address','br_no','company_website'
    ];

}
