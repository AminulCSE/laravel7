<?php
use Illuminate\Support\Facades\Route;
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
// Route::get('/', function (){
//     return view('welcome');
// });

Route::get('/', 'HomeController@home');
Route::get('sdf', 'HomeController@logo');

// class store section
Route::get('addclass', 'classcontroller@create')->name('addclass');
Route::post('store', 'classcontroller@store');
Route::get('showclass', 'classcontroller@show')->name('showclass');
Route::get('showclass/{id}', 'classcontroller@singleclsshow');
Route::get('deletecls/{id}', 'classcontroller@singleclsdelete');
Route::get('editcls/{id}', 'classcontroller@editcls');
Route::post('update/{id}', 'classcontroller@updatecls');

// Student Store section
Route::get('add/student', 'studentcontroller@addstudent')->name('addstudent');
Route::get('addstudent', 'studentcontroller@addstudent')->name('addstudent');
Route::post('studentstore', 'studentcontroller@studentstore');
Route::get('showstudents', 'studentcontroller@showstudents');
Route::get('show_one_student/{id}', 'studentcontroller@show_one_student');
Route::get('editstudent/{id}', 'studentcontroller@editstudent');
Route::get('deletestudent/{id}', 'studentcontroller@deletestudent');
Route::post('updatestudent/{id}', 'studentcontroller@updatestudent');


// Student Attendance system
Route::get('addattendance', 'studentcontroller@addattendance');
Route::post('store/student/attendance', 'studentcontroller@store_student_atten');





//Teacher route in here
Route::resource('teacher', 'teacherController');

//Logo route in here
Route::resource('logo', 'LogoController');
Route::get('dellogo/{id}', 'LogoController@destroy');

// Get logo for sidebar
// Route::get('/', 'LogoController@sidebar');

// Subject portion
Route::resource('subject','SubjectController');
Route::get('destroy/{id}','SubjectController@destroy');


// Result portion
Route::resource('result','ResultController');

Route::get('result/create/studentwise','ResultController@search_result_by_student');




/*Next To be apply:
1. Total Studnets
2. Today total Students are present and must to be apply attendance system.
3. Also Teacher include same of thinks.
4. And see all report by day, week, and monthly.
5. 



*/