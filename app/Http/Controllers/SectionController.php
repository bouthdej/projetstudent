<?php

namespace App\Http\Controllers;

use App\Section;
use Session;
use Illuminate\Http\Request;

class SectionController extends Controller{
  
    public function __contstruct(){
    $this->middleware('auth');
    $this->middleware(['role:admin']);
}
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function Allsection()
    {
        $sections=Section::all();
        return view('admin.gestionsection.index',compact('sections'));
    }
    public function createsection(){
        $sections=Section::all();
        return view('admin.gestionsection.create',compact('sections'));

    }
    public function storeSection(Request $req){
        
        $this->validate($req,[
            'name' => 'required|max:255',
            'description'=>'required|max:1000',
            ]
        );

            $section=new Section;
            $section->name=$req->name;
            $section->description=$req->description;
            $section->save();
            
           
           return redirect(route('listsection'));
           
           
      
    }
    public function sectiondestroy($id){
        $section = Section::find($id);
        $section->delete();
        session::flash('success','Section Deleted');
        return redirect(route('listsection'));
    }

}