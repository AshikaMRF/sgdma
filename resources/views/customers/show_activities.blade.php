@extends('app')

@section('content')

<div class="container">
<div class="row">
    <div class="col-sm-4"><h1>All Activities</h1> </div>

</div>
  
    
        <table class="table table-striped table-bordered table-hover">
            <tr class="success">
            <th class="col-sm-2"><b>Customer Name</b></th>
            <th class="col-sm-2"><b>Sales Person Name</b></th>
            <th class="col-sm-2">Outcome</th>
            <th class="col-sm-2"> <b>Edit Activity</b></th>
                
            </tr>
            @foreach($activities as $activity)
            <?php  $c=$activity->id; ?>
            <tr>
            <td>
                    {{$activity->customer_name}}
                </td>
                <td>
        <a href="">{{$activity->sales_person_name}}</a>
                </td>
                <td>
                {{$activity->outcome}}    
                </td>
                <td><a class="btn btn-warning " href="{{URL::to('activities/edit',$activity->id)}}">Edit</a></td>
    
            </tr>
            @endforeach
        </table>

@stop
        
    </div>

    