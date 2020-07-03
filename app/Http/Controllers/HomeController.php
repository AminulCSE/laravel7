<?php

namespace App\Http\Controllers;
use DB;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home(){
    	$allstudent = DB::table('students')->get();
    	$allteacher = DB::table('teachers')->get();
    	$allclass 	= DB::table('classes')->get();
    	$logos 		= DB::table('logos')->first();
        return view('index', compact('allstudent','allteacher','allclass','logos'));
    }





// The total numbers of elements are here in Main Campus
    // public function student(){
        
    // }
}
