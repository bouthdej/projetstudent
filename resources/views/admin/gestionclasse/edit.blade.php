@extends('layouts.admin.app')
@section('content')
<form id="settings-form" action="{{route('classeupdate',$classes->id)}}" method="POST">
@csrf
<div class="card">
    <div class="card-body">

        <div class="form-group">
        <p>...... </p>
        <br>
        <h3 ><strong>Update Classe</strong></h3>
        </div> 
        
        <div class="form-group row">
            <label for="className" class="col-sm-2 col-form-label">className</label>
            <div class="col-sm-10">
                <input class="form-control" type="text" name="className"  value="{{$classes->className}}">
            </div>
        </div>
       <div class="form-group row">
            <label for="classlevel" class="col-sm-2 col-form-label">classlevel</label>
            <div class="col-sm-10">
                <input class="form-control" type="text" name="classlevel" value="{{$classes->classlevel}}">
            </div>
        </div>
       <button  class="btn btn-primary waves-effect waves-light mr-1">
                Submit
            </button>
            <button type="reset" class="btn btn-secondary waves-effect">
                Cancel
            </button>
        </div>
    </div>
  
</div>

@endsection

