@extends('app')

@section('content')

<div class="container">
<div class="row">
    <div class="col-sm-4"><h1> Search Customer Results</h1> </div>
   
</div> 
        <table class="table table-striped table-bordered table-hover">
            <tr class="success">
            <th class="col-sm-2"><b>Customer Name</b></th>
                <th class="col-sm-2"><b>Company Name</b></th>
                <th class="col-sm-2"><b>Address</b></th>
                <th class="col-sm-2">Contacts</th>
                <th class="col-sm-2">Activity</th>
                <th class="col-sm-2"> <b>Edit Details</b></th>
                <th class="col-sm-2">Delete Customer</th>
            </tr>
            
           
            <tr>
            <td>
                    {{$customer->customer_name}}
                </td>
                <td>
        <a href="">{{$customer->company_name}}</a>
                </td>
                <td>
                {{$customer->company_website}}    
                </td>
                 <td>  
                 <a class="btn btn-warning " href="{{URL::to('contacts/add',$customer->id)}}"> Add Contact
                 </a>
                </td>
                <td> 
              
                 <a class="btn btn-warning " href="{{URL::to('activity/add',$customer->id)}}">Add Activity
                 </a> 
                </td>
                <td><a class="btn btn-warning " href="{{URL::to('customers/edit',$customer->id)}}">Edit</a></td>
                <td>
                    {{ Form::model($customer,['method' => 'DELETE','action'=>['CustomerController@destroy',$customer->id]]) }}
                    {{ Form::hidden('id', $customer->id) }}
                    {{ Form::submit('Delete', ['class' => 'btn btn-danger']) }}
                    {{ Form::close() }}  
                  </td>
            </tr>
          
        </table>

    <a href="{{URL::to('customers/create')}}" class="btn btn-primary form-control" >Add New Customer </a>
@stop
        
    </div>

    