<?php

namespace App\Http\Controllers;

use App\Role;
use App\User;
use App\Seance;
use App\Class_user;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class ProfController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function dashbord()
    {
        
        return view('prof.dashbord');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function gettimetable()
    {
        /*$user = User::all();
        $user=Auth::id();
        $seances = Seance::all();
        if($seances->user_id==Auth::id()){
            return view('prof.calendar',compact('seance','user'));*/

    
        //$classe=Class_user::all();
        $seances = Seance::all();
        $users = Role::where('id',2)->first()->users()->get();
        return view('prof.calendar',compact('seances','users'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
