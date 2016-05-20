<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Activity extends Model
{
    protected $fillable=['date',
           'activity_type','outcome',
           'sales_person_name',
           'customer_name'    ];

}
