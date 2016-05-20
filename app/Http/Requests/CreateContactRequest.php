<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class CreateContactRequest extends Request
{
    
    public function authorize()
    {
        return true;
    }

    
    public function rules()
    {
        return [
                'customer_name'=>'required',
            'name'=>'required',
            'email'=>'required',
            'contact_no'=>'required'
        ];
    }
}
