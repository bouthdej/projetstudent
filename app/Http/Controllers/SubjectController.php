<?php

namespace App\Http\Controllers;

use App\Subject;
use Illuminate\Http\Request;
use Session;

class SubjectController extends Controller
{  public function __contstruct(){
    $this->middleware('auth');
    $this->middleware(['role:admin']);}
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function AllSubjects()
    {
        $subjects=Subject::all();
        return view('admin.gestionsubject.index',compact('subjects'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function createsubject()
    {
        $subjects=Subject::all();
        return view('admin.gestionsubject.create',compact('subjects'));
    }

    
    public function storesubject(Request $req)
    {
        $this->validate($req,[
            'subjectname' => 'required|max:255',
            'hours'=>'required|max:50',
            'coefficient'=> 'required|max:5'
            ]
        );

            $subject=new Subject;
            $subject->subjectname=$req->subjectname;
            $subject->hours=$req->hours;
            $subject->coefficient=$req->coefficient;
            $subject->save();
            
           
           return redirect(route('listsubject'));
    }

    public function subjectdestroy($id){
        $subject = Subject::find($id);
        $subject->delete();
        session::flash('success','Subject Deleted');
        return redirect(route('listsubject'));
    }

    
}
