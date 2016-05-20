<?php

namespace App\Http\Controllers;

//use Illuminate\Http\Request;
use App\Customer;
use App\Http\Requests;
use Illuminate\Http\Request;// my put
use App\Http\Controllers\Controller;
use App\http\Requests\CreateCustomerRequest;
use Carbon\Carbon;
use DB;
use Mail;
use Illuminate\Support\Facades\Input;


class CustomerController extends Controller
{
    public function index()
    {
         $search=Input::get('Search');
         if($search!=null){
          $customer=Input::get('customer_search');
          $customers=Customer::where('customer_name',$customer)->get();
          $customer=$customers[0];
          return view('customers.search',compact('customer'));

         }
          else {
            $customers = Customer::all();
        return view('customers.index',compact('customers'));

          }
       
        
    }

    public function show($id)
    {
    }

    public function create()
    {
        return view('customers.create');
    }

    public function store(CreateCustomerRequest $request)
    {

         Customer::create($request->all());
         //Mail does not work on localhost, will work through server

          // Mail::send('email.sucess_registration', [], function($message) {
          //     $message->from('ashikamrf71@gmail.com', 'Success');
          //       $message->to('hello.sgdma@gmail.com')
          //           ->subject('Created Customer successfullys');
          //   });

         return redirect('customers');
    }

    public function edit($id){
        
          $customer = Customer::findOrFail($id);
         return view('customers.edit',compact('customer'));
    }

  public function search(){
   // dd('search');
        
          $customer = Customer::findOrFail($id);
         return view('customers.search',compact('customer'));
    }

       
    public function update($id, CreateCustomerRequest $request)
    {
         $customer = Customer::findOrFail($id);
         $customer->update($request->all());
       return redirect('customers');
    }

    public function destroy($id)
    {
        $customer = Customer::findOrFail($id);
        $customer->delete();

        return redirect('customers');
    }
}
