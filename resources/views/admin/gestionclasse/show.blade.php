@extends('layouts.admin.app')
@section('content')

<div class="row justify-content-center">
    <div class="col-md-12">
        <div class="row">
        <br><br><br>
            
        </div>
            <div class="card border-dark mb-3">
              <div class="col-md-3">
                <h4>
                     Class Details
                </h4>
            </div>
            <div class="card-body text-dark">
              
                <div class="row">
                    <div class="col-md-6">
                        <label for="className">className</label>
                        <pre>{{$classe->className}}</pre>
                    </div>
                    <div class="col-md-6">
                        <label for="classlevel">classlevel</label>
                        <pre>{{$classe->classlevel}}</pre>
                    </div>
                </div>
            
            </div>
        </div>
    </div>
</div>

@endsection 