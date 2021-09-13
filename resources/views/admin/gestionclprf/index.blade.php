@extends('layouts.admin.app')
@section('content')
<div class="row">   
  <div class="col-12">
    <div class="card">
      <div class="card-body">
       <p class="text-muted m-b-30">Admin table</p>
        <div id="datatable-buttons_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer">
          <div class="row">
            <h4 class="page-title">List of prof to class
            </h4>
        </div>
          <div class="col -md-9 text-right ">
              <a href="{{ route('xxxx') }}" class="btn btn-primary create_btn m-b-10">Ajouter prof</a>
          </div>
            <table id="datatable-buttons" class="table table-striped table-bordered dt-responsive nowrap dataTable no-footer dtr-inline collapsed" style="border-collapse: collapse; border-spacing: 0px; width: 100%;" role="grid" aria-describedby="datatable-buttons_info">
                <thead>
                  <tr role="row">
                    <th class="sorting" tabindex="0" aria-controls="datatable-buttons" rowspan="1" colspan="1" style="width: 50px;" aria-label="Position: activate to sort column ascending">Prof_name</th>
                    <th class="sorting" tabindex="0" aria-controls="datatable-buttons" rowspan="1" colspan="1" style="width: 25px;" aria-label="Age: activate to sort column ascending">Select Class</th>
                   
                    <!--<th class="sorting" tabindex="0" aria-controls="datatable-buttons" rowspan="1" colspan="1" style="width: 63px; display: none;" aria-label="Start date: activate to sort column ascending">Role</th>
                    <th class="sorting" tabindex="0" aria-controls="datatable-buttons" rowspan="1" colspan="1" style="width: 51px; display: none;" aria-label="Salary: activate to sort column ascending">Salary</th>-->
                  </tr>
                </thead>
                <tbody>
                  
                    @foreach ($classe as $class)
                    
                    <tr data-index="80">
                        <td style="">{{$class->class_id}}</td>
                        <td style="">{{$class->user_id}}</td>
                        

                          
                  @endforeach
                  
                </tbody>
              </table>
              
            </div>
          </div>
          
          
        </div>
      </div>
    </div>
  </div>
  <!-- end col -->
</div>

@endsection