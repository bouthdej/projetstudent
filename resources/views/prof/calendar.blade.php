@extends('layouts.prof.app')
@section('content')
<!-- Start content -->
<div class="content">

    <div class="container-fluid">
        <div class="page-title-box">
            <div class="row align-items-center">
                
                <div class="col-sm-6">
                    <h4 class="page-title">Calendar</h4>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0);">Professor</a></li>
                        <li class="breadcrumb-item active">Calendar</li>
                    </ol>

                </div>
                <div class="col-sm-6">
                
                    <div class="float-right d-none d-md-block">
                        <div class="dropdown">
                            <button class="btn btn-primary dropdown-toggle arrow-none waves-effect waves-light" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="mdi mdi-settings mr-2"></i> Settings
                            </button>
                            <div class="dropdown-menu dropdown-menu-right">
                                <a class="dropdown-item" href="#">Action</a>
                                <a class="dropdown-item" href="#">Another action</a>
                                <a class="dropdown-item" href="#">Something else here</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#">Separated link</a>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <!-- end row -->

        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <table cellspacing="0" style="center" border="1">
                            <!--<caption>Timetable</caption>-->
                            <tr>
                            <thead>
                                <td align="center" height="50" 
                                    width="100"><br>
                                    <b>Day/Period</b></br>
                                </td>
                                <td align="center" height="50" 
                                    width="300">
                                    <b>Seance 1<br>9:00-10:30 10:40-12-15</b>
                                </td>
                                <td align="center" height="50" 
                                            width="100">
                                            <b>Break<br>12:15-13:15</b>
                                </td>
                                <td align="center" height="50" 
                                    width="300">
                                    <b>Seance 2<br>13:15-14:45 15:00-16:30</b>
                                </td>
                                <td align="center" height="50" 
                                            width="100">
                                            <b>Break<br>16:30-18:00</b>
                                </td>
                                <td align="center" height="50" 
                                    width="300">
                                    <b>Seance 3<br>18:00-19:30 19:45-21:00</b>
                                </td>
                                </thead>
                            </tr>
                            <tr>
                                <td align="center" height="50">
                                    <b>Monday</b>
                                </td>
                                 
                                <td align="center" height="50" width="300">
                                    
                                        @foreach ($seances as $seance)
                                            @if ($seance->numSeance = 2 && $seance->day_of_week="Wednsday")
                                                <span >{{$seance->class_etudiants["className"]}}</span><br>
                                                <span >{{$seance->num_class}}</span>
                                            @endif
                                        @endforeach
                                        
                                        
                                    
                                </td>
                                <td rowspan="6" align="center" height="50">
                                    <h2>L<br>U<br>N<br>C<br>H</h2>
                                </td>
                                <td align="center" height="50" width="300">
                                  
                                </td>
                                <td rowspan="6" align="center" height="50">
                                    <h2>B<br>R<br>E<br>A<br>K</h2>
                                </td>
                                <td align="center" height="50" width="300">
                              
                                </td>
                                
                            </tr>
                            <tr>
                                <td align="center" height="50">
                                    <b>Tuesday</b>
                                </td>
                                <td align="center" height="50" width="300">
                                </td>
                    
                                <td align="center" height="50">
                                </td>
                                <td align="center" height="50">
                                <div th:each="seance : ${classe.seances}">
                                
                              </td>
                            </tr>
                            <tr>
                                <td align="center" height="50">
                                    <b>Wednesday</b>
                                </td>
                                <td align="center" height="50" width="300">
                                </td>
                               
                                <td align="center" height="50">
                              
                    
                            </tr>
                            <tr>
                                <td align="center" height="50">
                                    <b>Thursday</b>
                                </td>
                                <td align="center" height="50" width="300"> </td>
                                <td align="center" height="50">
                                <div th:each="seance : ${classe.seances}">
                                 <span th:if="${seance.numSeance} == 2 AND ${seance.dayOfWeek} == 'Thursday' "> 
                                 <span th:utext="${seance.subjectName}"></span><br>
                                 <span th:utext="${seance.prof.firstName}"></span> <span th:utext="${seance.prof.lastName}"></span><br>
                                 <span th:utext="${seance.numClass}"></span>
                                 </span>
                                </div>
                                </td>
                                
                            </tr>
                            <tr>
                                <td align="center" height="50">
                                    <b>Friday</b>
                                </td>
                               
                    
                               
                            </tr>
                            <tr>
                                <td align="center" height="50">
                                    <b>Saturday</b>
                                </td>
                              </tr>
                        </table>

                    </div>
                </div>
            </div>
        </div>
        <!-- end row -->

    </div>
    <!-- container-fluid -->
    <script src="{{asset('plugins/fullcalendar/js/fullcalendar.min.js')}}"></script>
      <script src="{{ asset('assets/pages/calendar-init.js') }}"></script>  
@endsection
