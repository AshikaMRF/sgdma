<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class CreateCustomerRequest extends Request
{
    
    public function authorize()
    {
        return true;
    }

    
    public function rules()
    {
        return [
            'customer_name'=>'required',
            'company_name'=>'required',
            'company_address'=>'required',
            'br_no'=>'required',
            'company_website'=>'required'
        ];
    }
}
