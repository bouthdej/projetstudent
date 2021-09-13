@extends('layouts.admin.app')
@section('content')
<form action="{{route('storeprfcls')}}" method="POST">
    {{csrf_field()}}
    
<div class="card">
    <div class="card-body">

        <div class="form-group">
        <p>...... </p>
        <br>
        <h3 class="mt-0 header-title">ADD Prof to class</h3>
        </div>
      <div class="form-group">
            <label>select class:</label>
            <select name="class_id" class="form-control js-example-basic-multiple " >
                @foreach ($classes as $classe)
                    <option value="{{ $classe->id}}}" >{{$classe->className}}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label>select prof:</label>
            <select name="user_id" class="form-control js-example-basic-multiple " >
                @foreach ($users as $user)
                    <option value="{{ $user->id }}" >{{ $user->name }}</option>
                @endforeach
            </select>
        </div>
        
        <div class="col -md-9 text-right ">
       <button  class="btn btn-success">
                Submit
        </button>
        <button type="reset" class="btn btn-secondary waves-effect">
                Cancel
            </button>
        </div>
    </div>
  
</div>
@endsection     

