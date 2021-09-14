<div class="left side-menu">
    <div class="slimscroll-menu" id="remove-scroll">
       <!--- Sidemenu -->
       <div id="sidebar-menu">
          <!-- Left Menu Start -->
          <ul class="metismenu" id="side-menu">
          <li>
               <a href="{{route('admindashbord')}}" class="waves-effect">
                   <i class="ti-home"></i><span> Dashboard </span>
               </a>
           </li>
             
             <li>
                <a href="javascript:void(0);" class="waves-effect"><i class="ti-email"></i><span> Email <span class="float-right menu-arrow"><i class="mdi mdi-chevron-right"></i></span> </span></a>
                <ul class="submenu">
                   <li><a href="email-inbox.html">Inbox</a></li>
                   <li><a href="email-read.html">Email Read</a></li>
                   <li><a href="email-compose.html">Email Compose</a></li>
                </ul>
             </li>
          
             
             <li>
                <a href="javascript:void(0);" class="waves-effect"><span> Professor <span class="float-right menu-arrow"><i class="mdi mdi-chevron-right"></i></span> </span> </a>
                <ul class="submenu">

                   <li><a href={{ route('listprof') }}>List</a></li>
               </ul>
              </li> 
             
             <li>
                <a href="javascript:void(0);" class="waves-effect"><span> Student<span class="float-right menu-arrow"><i class="mdi mdi-chevron-right"></i></span> </span> </a>
                <ul class="submenu">
                   <!--<li><a href="#">Add</a></li>-->
                   <li><a href={{ route('liststudent') }}>List</a></li>
               </ul>
             </li>
             <li>
               <a href="javascript:void(0);" class="waves-effect"><span> Section<span class="float-right menu-arrow"><i class="mdi mdi-chevron-right"></i></span> </span> </a>
               <ul class="submenu">
                  <!--<li><a href="#">Add</a></li>-->
                  <li><a href={{ route('listsection') }}>List</a></li>
              </ul>
            </li>
            <li>
               <a href="{{ route('listsubject') }}" class="waves-effect"><span> Subjects<span class="float-right menu-arrow"><i class="mdi mdi-chevron-right"></i></span> </span> </a>
              
            </li>
            <li>
               <a href="{{ route('listclass') }}" class="waves-effect"><span> Classes<span class="float-right menu-arrow"><i class="mdi mdi-chevron-right"></i></span> </span> </a>
            </li>
            <li>
               <a href="{{ route('allclassprof') }}" class="waves-effect"><span> Add Professor To class<span class="float-right menu-arrow"><i class="mdi mdi-chevron-right"></i></span> </span> </a>
            </li>
             <li>
                <a href="{{ route('listseance') }}" class="waves-effect"><span> Add Seance to class<span class="float-right menu-arrow"><i class="mdi mdi-chevron-right"></i></span> </span> </a>
                
             </li>
           
             
               
          </ul>
       </div>
       <!-- Sidebar -->
       <div class="clearfix"></div>
    </div>
    <!-- Sidebar -left -->
 </div>