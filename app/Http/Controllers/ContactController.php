<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Customer;
use App\Contact;
use DB;
use App\Http\Requests;
use App\Http\Requests\CreateContactRequest; 

class ContactController extends Controller
{
    
    public function index($id)
    {

        $customer=Customer::findOrFail($id);
        return view('customers.add_contact',compact('customer'));
    }

 public function show()
    {
    	$contacts=Contact::all();
        return view('customers.show_contacts',compact('contacts'));
    }

     public function edit($id){
        
          $contact = Contact::findOrFail($id);
         return view('customers.edit_contact',compact('contact'));
    }


    public function store(CreateContactRequest $request)
    {
          $customer=$request->customer_name;
          Contact::create($request->all());
           return redirect('customers');
           
    }

    public function update($id,CreateContactRequest $request){
    	DB::table('contacts')->update([
        'name'=>$request->name,
        'email' =>$request->email,
        'contact_no'=>$request->contact_no,
        'customer_name'=>$request->customer_name
    		]);
    	return redirect('customers');

    }
}
