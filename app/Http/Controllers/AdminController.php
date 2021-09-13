<?php

namespace App\Http\Controllers;

use Hash;
use Session;
use App\Role;
use App\User;
use App\Seance;
use App\Section;
use App\Class_user;
use App\Class_etudiant;
use Illuminate\Http\Request;
//use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{    public function __contstruct(){
       $this->middleware('auth');
       $this->middleware(['role:admin']);
}
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function dashbord(){
        return view('admin.dashbord.index');
    }
    //student
    public function AllStudent()
    {
        //$users=User::whereHas('roles')->where('name','=', 'student')->get();
        $users = Role::where('id',3)->first()->users()->get();
        
       return view('admin.gestionstudent.index',compact('users'));
    }
    public function createStudent(){
        $roles=Role::all();
        return view('admin.gestionstudent.create',compact('roles'));

    }
    public function storeStudent(Request $req){
        
        $this->validate($req,[
            'name' => 'required|max:255',
            'email'=>'required|email|unique:users',
            ]
        );

            $user=new User;
            $user->name=$req->name;
            $user->email=$req->email;
            $user->password=Hash::make($req->password);
            $user->save();
            
            $student =Role::where('name','=','student')->first();
            $user->attachRole($student);
           return redirect(route('liststudent'));
           
           
      
    }
    public function editStudent($id)
    {
        $user = User::find($id);
        $roles = Role::all();  
        return view('admin.gestionstudent.edit', compact('user','roles'));
    }
    public function updateStudent(Request $req, $id)
    {
        $this->validate($req,[
            'name' => 'required',
            'email'=>'required|email',
            'password'=>'required']
        );

            $user= User::find($id);
            $user->name=$req->name;
            $user->email=$req->email;
            $user->password=$req->password;
            $user->save();
            return redirect(route('liststudent'));
    }
    public function showStudent($id){
        $user=User::find($id);
        return view('admin.gestionstudent.show', compact('user'));
    }
    public function destroyStudent($id){
        $user = User::find($id);
        $user->delete();
        session::flash('success','User Deleted');
        return redirect(route('liststudent'));
    }

    //Profossor
    public function Allprof()
    {
      $users = Role::where('id',2)->first()->users()->get();
         return view('admin.gestionprof.index',compact('users'));
    }
    public function Createprof(){
        $roles=Role::all();
        return view('admin.gestionprof.create',compact('roles'));

    }
    public function profstore(Request $req){
        
        $this->validate($req,[
            'name' => 'required|max:255',
            'email'=>'required|email|unique:users',
            ]
        );

            $user=new User;
            $user->name=$req->name;
            $user->email=$req->email;
            $user->password=Hash::make($req->password);
            $user->save();
            $prof =Role::where('name','=','prof')->first();
            $user->attachRole($prof);
           return redirect(route('listprof'));
    }

    public function editprof($id)
    {   
        $user = User::find($id);
        $roles = Role::all();  
        return view('admin.gestionprof.edit', compact('user','roles'));
    }
    public function updateprof(Request $req, $id)
    {
        $this->validate($req,[
            'name' => 'required',
            'email'=>'required|email',
            'password'=>'required']
        );

            $user= User::find($id);
            $user->name=$req->name;
            $user->email=$req->email;
            $user->password=$req->password;
            $user->save();
            return redirect(route('listprof'));
    }
    public function showprof($id){
        $user=User::find($id);
        return view('admin.gestionprof.show', compact('user'));
    }
    public function destroyprof($id){
        $user = User::find($id);
        $user->delete();
        session::flash('success','User Deleted');
        return redirect(route('listprof'));
    }
    
   //classe

   public function Allclasse()
   {
       
       $classes = Class_etudiant::all();
       
      return view('admin.gestionclasse.index',compact('classes'));
   }
   public function createclasse(){
        $sections = Section::all();
        $classes = Class_etudiant::all();
       return view('admin.gestionclasse.create',compact('classes','sections'));

   }
   public function storeclasse(Request $req){
       
       $this->validate($req,[
           'className' => 'required|max:255',
           'classlevel'=>'required',
           'section_id'=>'required',
           ]
       );

           $classe=new Class_etudiant;
           $classe->className=$req->className;
           $classe->classlevel=$req->classlevel;
           $classe->section_id=$req->section_id;
           $classe->save();
           
           //$classe->sections()->sync($req->section_id);
          return redirect(route('listclass'));
          
          
     
   }
   public function editclasse($id)
   {
       $sections = Section::all();
       $classes = Class_etudiant::all(); 
       return view('admin.gestionclasse.edit', compact('sections','classes'));
   }
   public function showclasse($id){
    $classe = Class_etudiant::find($id);
    return view('admin.gestionclasse.show', compact('classe'));
}
   public function updateclasse(Request $req, $id)
   {
       $this->validate($req,[
        'className' => 'required|max:255',
        'classlevel'=>'required',
        'section_id'=>'required']
       );
      
       $classe=Class_etudiant::find($id);;
       $classe->className=$req->className;
       $classe->classlevel=$req->classlevel;
       $classe->section_id=$req->section_id;
       $classe->save();
       return redirect(route('listclass'));
   }
  
   public function destroyclasse($id){
       $classe= Class_etudiant::find($id);;
       $classe->delete();
       session::flash('success','Class Deleted');
       return redirect(route('listclass'));
   }
   //add seance
   public function Allseances()
   {
       $seances = Seance::all();
       //$classes= Class_etudiant::all();
       return view('admin.gestionseance.index',compact('seances'));
   }
   public function createseance(){
    $seances = Seance::all();
    $classes = Class_etudiant::all();
    $users=User::all();
   return view('admin.gestionseance.create',compact('seances','classes','users'));

}
public function storeseance(Request $req){
       
    $this->validate($req,[
        'num_class' => 'required|max:255',
        'num_seance'=>'required',
        'day_of_week'=>'required|max:255',
        'period'=>'required|max:255',
        'class_id'=>'required',
        'user_id'=>'required'
        ]
    );

        $seance=new Seance;
        $seance->num_class=$req->num_class;
        $seance->num_seance=$req->num_seance;
        $seance->day_of_week=$req->day_of_week;
        $seance->period=$req->period;
        $seance->class_id=$req->class_id;
        $seance->user_id=$req->user_id;
        $seance->save();
    
       return redirect(route('listseance'));
       
       
  
}
   public function destroyseance($id){
    $seance= Seance::find($id);;
    $seance->delete();
    session::flash('success','seance Deleted');
    return redirect(route('listseance'));
     }
     public function Allclassprof()
     {  $classe=Class_user::all();
        $classes = Class_etudiant::all(); 
        $users = Role::where('id',2)->first()->users()->get();
       return view('admin.gestionclprf.index',compact('classes','users','classe'));
     }
     public function createproftoclass(){
        
        $classes = Class_etudiant::all();
        $users=User::all();
       return view('admin.gestionclprf.create',compact('classes','users'));
    
    }
    public function storeproftoclass(Request $req){
        $this->validate($req,[
            'class_id'=>'required',
            'user_id'=>'required'
            ]
        );

        $classe=new Class_user;
        $classe->class_id=$req->class_id;
        $classe->user_id=$req->user_id;
        $classe->save();
       return redirect(route('allclassprof'));



    }





}
