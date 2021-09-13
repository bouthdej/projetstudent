@extends('layouts.admin.app')
@section('content')
<form action="{{route('subjectstored')}}" method="POST">
    {{csrf_field()}}
    
<div class="card">
    <div class="card-body">

        <div class="form-group">
        <p>...... </p>
        <br>
        <h3 class="mt-0 header-title">ADD Subject</h3>
        </div>
        <div class="form-group row">
            <label for="subjectname" class="col-sm-2 col-form-label">Subject name</label>
            <div class="col-sm-10">
                <input class="form-control" type="text" name="subjectname" >
            </div>
        </div>
        <div class="form-group row">
            <label for="hours" class="col-sm-2 col-form-label">Hours</label>
            <div class="col-sm-10">
                <input class="form-control" type="text" name="hours" >
            </div>
        </div>
        <div class="form-group row">
            <label for="coefficient" class="col-sm-2 col-form-label">Coefficient</label>
            <div class="col-sm-10">
                <input class="form-control" type="text" name="coefficient" >
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

