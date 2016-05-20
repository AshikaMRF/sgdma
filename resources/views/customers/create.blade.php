@extends('app')

@section('content')
    <h1> Add New Customer</h1>
    <hr>

    {!! Form::open(['url' => 'customers']) !!}
    @include('customers.form')

<input type="hidden" name="store_type" value="customer">
<div class="form-group">
    {!! Form:: submit('Add Customer',['class' => 'btn btn-primary form-control']) !!}
   

</div>



    {!! Form::close() !!}

    @include('errors.list')
@stop