@extends('app')

@section('content')

<div class="container">
<div class="row">
    <div class="col-sm-4"><h1>All Contacts</h1> </div>

</div>
  
    
        <table class="table table-striped table-bordered table-hover">
            <tr class="success">
            <th class="col-sm-2"><b>Customer Name</b></th>
            <th class="col-sm-2"><b>Contact Name</b></th>
            <th class="col-sm-2">Email</th>
            <th class="col-sm-2"> <b>Edit contact</b></th>
                
            </tr>
            @foreach($contacts as $contact)
            <?php  $c=$contact->id; ?>
            <tr>
            <td>
                    {{$contact->customer_name}}
                </td>
                <td>
        <a href="">{{$contact->name}}</a>
                </td>
                <td>
                {{$contact->email}}    
                </td>
                <td><a class="btn btn-warning " href="{{URL::to('contacts/edit',$contact->id)}}">Edit</a></td>
    
            </tr>
            @endforeach
        </table>

@stop
        
    </div>

    