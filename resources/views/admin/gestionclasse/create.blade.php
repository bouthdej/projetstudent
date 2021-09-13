@extends('layouts.admin.app')
@section('content')
<form action="{{route('classestore')}}" method="POST">
    {{csrf_field()}}
    
<div class="card">
    <div class="card-body">

        <div class="form-group">
        <p>...... </p>
        <br>
        <h3 class="mt-0 header-title">ADD Classe</h3>
        </div>
        <div class="form-group row">
            <label for="className" class="col-sm-2 col-form-label">className</label>
            <div class="col-sm-10">
                <input class="form-control" type="text" name="className" >
            </div>
        </div>
        <div class="form-group row">
            <label for="classlevel" class="col-sm-2 col-form-label">classlevel</label>
            <div class="col-sm-10">
                <input class="form-control" type="text" name="classlevel" >
            </div>
        </div>
        <div class="form-group">
            <label>section name:</label>
            <select name="section_id" class="form-control js-example-basic-multiple " >
                @foreach ($sections as $section)
                    <option value="{{ $section->id }}" >{{ $section->name }}</option>
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

