@extends('layouts.admin.app')
@section('content')
<div class="row">   
  <div class="col-12">
    <div class="card">
      <div class="card-body">
       <p class="text-muted m-b-30">Admin table</p>
        <div id="datatable-buttons_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer">
          <div class="row">
            <h4 class="page-title">List of Subject</h4>
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
              <a href="{{ route('subjectcreated') }}" class="btn btn-primary create_btn m-b-10">Ajouter Subject</a>
          </div>
            <table id="datatable-buttons" class="table table-striped table-bordered dt-responsive nowrap dataTable no-footer dtr-inline collapsed" style="border-collapse: collapse; border-spacing: 0px; width: 100%;" role="grid" aria-describedby="datatable-buttons_info">
                <thead>
                  <tr role="row">
                    <th class="sorting_asc" tabindex="0" aria-controls="datatable-buttons" rowspan="1" colspan="1" style="width: 50px;" aria-sort="ascending" aria-label="Name: activate to sort column descending">Id</th>
                    <th class="sorting" tabindex="0" aria-controls="datatable-buttons" rowspan="1" colspan="1" style="width: 50px;" aria-label="Position: activate to sort column ascending">subject name</th>
                    <th class="sorting" tabindex="0" aria-controls="datatable-buttons" rowspan="1" colspan="1" style="width: 50px;" aria-label="Position: activate to sort column ascending">Hours</th>
                    <th class="sorting" tabindex="0" aria-controls="datatable-buttons" rowspan="1" colspan="1" style="width: 50px;" aria-label="Position: activate to sort column ascending">Coefficient</th>
                    <th class="sorting" tabindex="0" aria-controls="datatable-buttons" rowspan="1" colspan="1" style="width: 100px;" aria-label="Age: activate to sort column ascending">Action</th>
                      
                  </tr>
                </thead>
                <tbody>
                  
                    @foreach ($subjects as $subject)
                    
                    <tr data-index="80">
                        <td style="">{{$subject->id}}</td>
                        <td style="">{{$subject->subjectname}}</td>
                        <td style="">{{$subject->hours}}</td>
                        <td style="">{{$subject->coefficient}}</td>
                        
                       <div>
                             <td>

                                <button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#deleteModal{{ $subject->id }}">Delete</i>
                                </button>
                            </td>
                       </div>
                       <form action="{{route('subjectdeleted',$subject->id)}}" method="POST" id="deletesectionForm">
                        @method('DELETE')
                        @csrf
                          <div class="modal fade" id="deleteModal{{ $subject->id }}" tabindex="-1" aria-labelledby="deleteModalLabel" aria-hidden="true">
                              <div class="modal-dialog">
                                  <div class="modal-content">
                                              <div class="modal-header">
                                              <h5 class="modal-title" id="deleteModalLabel">Delete Subject</h5>
                                              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                  <span aria-hidden="true">&times;</span>
                                              </button>
                                              </div>
                                              <div class="modal-body">
                                                  You sure you want to delete <b>{{ $subject->name }}</b> ?
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
      var form = document.getElementById('deletesubjectForm');
      
      $('#deleteModal').modal('show')

  }
</script>
@endsection