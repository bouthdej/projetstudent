@extends('layouts.admin.app')
@section('content')
<div class="row">   
  <div class="col-12">
    <div class="card">
      <div class="card-body">
       <p class="text-muted m-b-30">Admin table</p>
        <div id="datatable-buttons_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer">
          <div class="row">
            <h4 class="page-title">List of Classe
            </h4>
          </div>
          <div class="col-md-8">
            @if(Session::has('success'))
                <div class="alert alert-dismissible alert-success" role="alert">
                    <strong>Success:</strong> {{Session::get('success')}}
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            @endif
        </div>
          <div class="col -md-9 text-right ">
              <a href="{{ route('classecreate') }}" class="btn btn-primary create_btn m-b-10">Ajouter Classe</a>
          </div>
            <table id="datatable-buttons" class="table table-striped table-bordered dt-responsive nowrap dataTable no-footer dtr-inline collapsed" style="border-collapse: collapse; border-spacing: 0px; width: 100%;" role="grid" aria-describedby="datatable-buttons_info">
                <thead>
                  <tr role="row">
                    <th class="sorting_asc" tabindex="0" aria-controls="datatable-buttons" rowspan="1" colspan="1" style="width: 50px;" aria-sort="ascending" aria-label="Name: activate to sort column descending">Id</th>
                    <th class="sorting" tabindex="0" aria-controls="datatable-buttons" rowspan="1" colspan="1" style="width: 50px;" aria-label="Position: activate to sort column ascending">className</th>
                    <th class="sorting" tabindex="0" aria-controls="datatable-buttons" rowspan="1" colspan="1" style="width: 25px;" aria-label="Age: activate to sort column ascending">classlevel</th>
                    <th class="sorting" tabindex="0" aria-controls="datatable-buttons" rowspan="1" colspan="1" style="width: 25px;" aria-label="Age: activate to sort column ascending">Section Name</th>
                    <th class="sorting" tabindex="0" aria-controls="datatable-buttons" rowspan="1" colspan="1" style="width: 100px;" aria-label="Age: activate to sort column ascending">Action</th>
                    <!--<th class="sorting" tabindex="0" aria-controls="datatable-buttons" rowspan="1" colspan="1" style="width: 63px; display: none;" aria-label="Start date: activate to sort column ascending">Role</th>
                    <th class="sorting" tabindex="0" aria-controls="datatable-buttons" rowspan="1" colspan="1" style="width: 51px; display: none;" aria-label="Salary: activate to sort column ascending">Salary</th>-->
                  </tr>
                </thead>
                <tbody>
                  
                    @foreach ($classes as $classe)
                    
                    <tr data-index="80">
                        <td style="">{{$classe->id}}</td>
                        <td style="">{{$classe->className}}</td>
                        <td style="">{{$classe->classlevel}}</td>
                        <td style="">{{$classe->sections['name']}}</td>
                       <div>
                             <td>
                                <a href="{{ route('classedetails',$classe->id)}}"class="btn btn-sm btn-info" >show</a>
                                <a href="{{ route('classeedit',$classe->id) }}"class="btn btn-sm btn-primary waves-effect" >Edit</i></a>
                                <button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#deleteModal{{ $classe->id }}">Delete</i>
                                </button>
                            </td>
                       </div>
                       <form action="{{route('classedestroy',$classe->id)}}" method="POST" id="deleteclasseForm">
                        @method('DELETE')
                        @csrf
                          <div class="modal fade" id="deleteModal{{ $classe->id }}" tabindex="-1" aria-labelledby="deleteModalLabel" aria-hidden="true">
                              <div class="modal-dialog">
                                  <div class="modal-content">
                                              <div class="modal-header">
                                              <h5 class="modal-title" id="deleteModalLabel">Delete classe</h5>
                                              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                  <span aria-hidden="true">&times;</span>
                                              </button>
                                              </div>
                                              <div class="modal-body">
                                                  You sure you want to delete <b>{{ $classe->className }}</b> ?
                                              </div>
                                              <div class="modal-footer">
                                              <button type="submit" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                              <button type="submit" class="btn btn-danger">Delete</button>
                                              </div>
                                  </div>
                                </div>
                          </div>
                    </form>

                          
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
<script>
  function handledele(id){
      var form = document.getElementById('deleteclasseForm');
      
      $('#deleteModal').modal('show')

  }
</script>
@endsection