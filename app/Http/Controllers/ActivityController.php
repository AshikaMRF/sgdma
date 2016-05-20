<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Activity;
use App\Http\Requests;
use App\Customer;
use App\Http\Requests\CreateActivityRequest;
use DB;


class ActivityController extends Controller
{
   
    public function index($id)
    {

       $customer=Customer::findOrFail($id);
        return view('customers.add_activity',compact('customer'));
    }

     public function store(CreateActivityRequest $request)
    {
          $customer=$request->customer_name;
          Activity::create($request->all());
          return redirect('customers');

    }

    public function edit($id){
        
          $activity = Activity::findOrFail($id);
         return view('customers.edit_activity',compact('activity'));
    }

     public function update($id,CreateActivityRequest $request){
        DB::table('activities')->update([
        'activity_type'=>$request->activity_type,
        'date' =>$request->date,
        'outcome'=>$request->outcome,
        'sales_person_name'=>$request->sales_person_name,
        'customer_name'=>$request->customer_name
            ]);
        return redirect('customers');

    }

    public function show()
    {
        $activities=Activity::all();
        return view('customers.show_activities',compact('activities'));
    }

}
