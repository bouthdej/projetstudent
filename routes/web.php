<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\SectionController;
use App\Http\Controllers\SubjectController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('auth.login');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['prefix'=>'admin/','middleware'=>['role:admin']],function(){
   
    Route::get('dashbord','AdminController@dashbord')->name('admindashbord');
     //student
    Route::get('liststudent','AdminController@AllStudent')->name('liststudent');
    Route::get('+addstudent', 'AdminController@createStudent')->name('studentcreate');
    Route::post('storestudent','AdminController@storeStudent')->name('studentstore');
    Route::get('/student/edit/{user_id}','AdminController@editStudent')->name('studentedit');
    Route::post('/student/update/{user_id}','AdminController@updateStudent')->name('studentupdate');
    Route::get('/student/show/{user_id}','AdminController@showStudent')->name('studentdetails');
    Route::delete('admin/{user_id}','AdminController@destroyStudent')->name('studentdestroy');

    //prof
    Route::get('listprof','AdminController@Allprof')->name('listprof');
    Route::get('addprof', 'AdminController@Createprof')->name('profcreate');
    Route::post('profstore','AdminController@profstore')->name('profstore');
    Route::get('/prof/edit/{user_id}','AdminController@editprof')->name('profedit');
    Route::post('/prof/update/{user_id}','AdminController@updateprof')->name('profupdate');
    Route::get('/prof/show/{user_id}','AdminController@showprof')->name('profdetails');
    Route::delete('prof/{user_id}','AdminController@destroyprof')->name('profdestroy');

    //section
    Route::get('listsection','SectionController@Allsection')->name('listsection');
    Route::get('addsection', 'SectionController@createsection')->name('sectioncreated');
    Route::post('storeprof','SectionController@storesection')->name('sectionstored');
    Route::delete('section/{user_id}','SectionController@sectiondestroy')->name('sectiondeleted');

    //subject
    Route::get('listsubject','SubjectController@AllSubjects')->name('listsubject');
    Route::get('addsubject', 'SubjectController@createsubject')->name('subjectcreated');
    Route::post('storesubject','SubjectController@storesubject')->name('subjectstored');
    Route::delete('subject/{user_id}','SubjectController@subjectdestroy')->name('subjectdeleted');
    
    //classe
    Route::get('listclasse','AdminController@Allclasse')->name('listclass');
    Route::get('addclasse', 'AdminController@createclasse')->name('classecreate');
    Route::post('storeclasse','AdminController@storeclasse')->name('classestore');
    Route::get('/classe/edit/{class_id}','AdminController@editclasse')->name('classeedit');
    Route::post('/classe/update/{class_id}','AdminController@updateclasse')->name('classeupdate');
    Route::get('/classe/show/{class_id}','AdminController@showclasse')->name('classedetails');
    Route::delete('classe/{class_id}','AdminController@destroyclasse')->name('classedestroy');

    //addseance
    Route::get('listseance','AdminController@Allseances')->name('listseance');
    Route::get('addseance', 'AdminController@createseance')->name('seancecreate');
    Route::post('storeseance','AdminController@storeseance')->name('seancestore');
    Route::delete('seance/{seance_id}','AdminController@destroyseance')->name('seancedestoy');

    //add proftoclass
    Route::get('listproftoclass','AdminController@Allclassprof')->name('allclassprof');
    Route::get('xxxx', 'AdminController@createproftoclass')->name('xxxx');
    Route::post('storproftoclass','AdminController@storeproftoclass')->name('storeprfcls');
    //Route::delete('seance/{seance_id}','AdminController@destroyseance')->name('seancedestoy');


    });
Route::group(['prefix'=>'prof/','middleware'=>['role:prof']],function(){
    Route::get('dashbord','ProfController@dashbord')->name('profdashbord');
    Route::get('calendar','ProfController@gettimetable')->name('calendar');
});

Route::group(['prefix'=>'student/','middleware'=>['role:student']],function(){
    Route::get('dashbord','StudentController@dashbord')->name('studentdashbord');
});
