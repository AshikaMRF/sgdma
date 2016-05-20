@extends('app')

@section('content')
    <h1> Update Customer</h1>
    <hr>

    {!! Form::model($customer,['method' => 'PATCH','action'=>['CustomerController@update',$customer->id]]) !!}
    @include('customers.form')


<div class="form-group">
    {!! Form:: submit('Update Customer',['class' => 'btn btn-primary form-control']) !!}
   

</div>



    {!! Form::close() !!}

    @include('errors.list')
@stop