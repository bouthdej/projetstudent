@extends('layouts.admin.app')
@section('content')
<form action="{{route('studentstore')}}" method="POST">
    {{csrf_field()}}
    
<div class="card">
    <div class="card-body">

        <div class="form-group">
        <p>...... </p>
        <br>
        <h3 class="mt-0 header-title">ADD Student</h3>
        </div>
        <div class="form-group row">
            <label for="name" class="col-sm-2 col-form-label">name</label>
            <div class="col-sm-10">
                <input class="form-control" type="text" name="name" >
            </div>
        </div>
     <div class="form-group row">
            <label for="email" class="col-sm-2 col-form-label">email</label>
            <div class="col-sm-10">
                <input class="form-control" type="email" name="email" >
            </div>
        </div>
        <div class="form-group row">
            <label for="password" class="col-sm-2 col-form-label">password</label>
            <div class="col-sm-10">
                <input class="form-control" type="password" name="password">
            </div>
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

