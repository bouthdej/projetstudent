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
                     Prof Details
                </h4>
            </div>
            <div class="card-body text-dark">
              
                <div class="row">
                    <div class="col-md-6">
                        <label for="name">Name</label>
                        <pre>{{$user->name}}</pre>
                    </div>
                    <div class="col-md-6">
                        <label for="email">Email</label>
                        <pre>{{$user->email}}</pre>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <label for="roles">Roles:</label>
                        @if($user->roles->count() > 0)
                            @foreach($user->roles as $role)
                                <pre>{{$role->display_name}}</pre>
                            @endforeach
                        @else
                            <p>this user has not been assigned to anny roles yet.</p>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection 