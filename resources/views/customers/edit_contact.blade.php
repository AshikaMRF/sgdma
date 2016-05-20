@extends('app')

@section('content')
    <h1> Edit Contact</h1>
    <hr>

    {!! Form::model($contact,['method' => 'PATCH','action'=>['ContactController@update',$contact->id]]) !!}
    @include('customers.contact')
    {!! Form::label('customer_name','C name') !!}
    {!! Form::text('customer_name', $contact->customer_name, ['class' =>'form-control']) !!}


<div class="form-group">
    {!! Form:: submit('Update contact',['class' => 'btn btn-primary form-control']) !!}
   

</div>



    {!! Form::close() !!}

    @include('errors.list')
@stop