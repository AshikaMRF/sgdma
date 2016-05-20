<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class CreateActivityRequest extends Request
{
    
    public function authorize()
    {
        return true;
    }

    
    public function rules()
    {
        return [
                'customer_name'=>'required',
            'activity_type'=>'required',
            'date'=>'',
            'outcome'=>'required',
            'sales_person_name'=>'required'
        ];
    }
}
