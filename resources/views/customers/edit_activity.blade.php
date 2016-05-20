@extends('app')

@section('content')
    <h1> Edit Customer</h1>
    <hr>

    {!! Form::model($activity,['method' => 'PATCH','action'=>['ActivityController@update',$activity->id]]) !!}
    @include('customers.activity')
{!! Form::label('customer_name','C name') !!}
    {!! Form::text('customer_name', $activity->customer_name, ['class' =>'form-control']) !!}

<div class="form-group">
    {!! Form:: submit('Update Activity',['class' => 'btn btn-primary form-control']) !!}
   

</div>



    {!! Form::close() !!}

    @include('errors.list')
@stop