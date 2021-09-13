@extends('layouts.admin.app')
@section('content')
<form action="{{route('seancestore')}}" method="POST">
    {{csrf_field()}}
    
<div class="card">
    <div class="card-body">

        <div class="form-group">
        <p>...... </p>
        <br>
        <h3 class="mt-0 header-title">ADD Seance</h3>
        </div>
        <div class="form-group row">
            <label for="num_class" class="col-sm-2 col-form-label">num_class</label>
            <div class="col-sm-10">
                <input class="form-control" type="text" name="num_class" >
            </div>
        </div>
        <div class="form-group row">
            <label for="num_seance" class="col-sm-2 col-form-label">num_seance</label>
            <div class="col-sm-10">
                <input class="form-control" type="text" name="num_seance" >
            </div>
        </div>
        <div class="form-group row">
            <label for="day_of_week" class="col-sm-2 col-form-label">day_of_week</label>
            <div class="col-sm-10">
                <select name="day_of_week" class="form-control js-example-basic-multiple " >
                        <option value="Monday" >Monday</option>
                        <option value="Tuesday" >Tuesday</option>
                        <option value="Wednsday" >Wednsday</option>
                        <option value="Thursday" >Thursday</option>
                        <option value="Friday" >Friday</option>
                        <option value="Saturday" >Saturday</option>
                </select>
            </div>
        </div>
        <div class="form-group row">
            <label for="period" class="col-sm-2 col-form-label">period</label>
            <div class="col-sm-10">
                <select name="period" class="form-control js-example-basic-multiple " >
                    <option value="Weekly" >Weekly</option>
                    <option value="Monthly" >Monthly</option>
                    <option value="Daily" >Daily</option>
                    <
            </select>
            </div>
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

