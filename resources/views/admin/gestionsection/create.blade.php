@extends('layouts.admin.app')
@section('content')
<form action="{{route('sectionstored')}}" method="POST">
    {{csrf_field()}}
    
<div class="card">
    <div class="card-body">

        <div class="form-group">
        <p>...... </p>
        <br>
        <h3 class="mt-0 header-title">ADD Section</h3>
        </div>
        <div class="form-group row">
            <label for="name" class="col-sm-2 col-form-label">section name</label>
            <div class="col-sm-10">
                <input class="form-control" type="text" name="name" >
            </div>
        </div>
        <div class="form-group row">
            <label for="description" class="col-sm-2 col-form-label">Description</label>
            <div class="col-sm-10">
                <input class="form-control" type="text" name="description" >
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

