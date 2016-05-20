@extends('app')

@section('content')
    <h1> Add Activity</h1>
    <hr>
    {!! Form::open(['url' => 'contacts']) !!}
    @include('customers.contact')


<div class="form-group">

    {!! Form::label('customer_name','C name') !!}
    {!! Form::text('customer_name', $customer->customer_name, ['class' =>'form-control']) !!}
</div>

<div class="form-group">
     {!! Form:: submit('Add Contact',['class' => 'btn btn-primary form-control']) !!}
</div>
    {!! Form::close() !!}

    @include('errors.list')
@stop