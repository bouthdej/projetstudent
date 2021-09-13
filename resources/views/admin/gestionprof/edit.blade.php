    @extends('layouts.admin.app')
@section('content')
<form id="settings-form" action="{{route('profupdate',$user->id)}}" method="POST">
@csrf
<div class="card">
    <div class="card-body">

        <div class="form-group">
        <p>...... </p>
        <br>
        <h3 ><strong>Update Student</strong></h3>
        </div> 
        
        <div class="form-group row">
            <label for="example-text-input" class="col-sm-2 col-form-label">name</label>
            <div class="col-sm-10">
                <input class="form-control" type="text" name="name" id="name" value="{{$user->name}}">
            </div>
        </div>
       <div class="form-group row">
            <label for="example-email-input" class="col-sm-2 col-form-label">email</label>
            <div class="col-sm-10">
                <input class="form-control" type="email" name="email"id="email" value="{{$user->email}}">
            </div>
        </div>
        <div class="form-group row">
            <label for="example-email-input" class="col-sm-2 col-form-label">apssword</label>
            <div class="col-sm-10">
                <input class="form-control" type="password" name="password"id="password" value="{{$user->password}}">
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

