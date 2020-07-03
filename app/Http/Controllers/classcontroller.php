<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class classcontroller extends Controller
{
    public function create(){
    	return view('class.addclass');
    }

    public function store(Request $request){
    	$validatedData = $request->validate([
        'class_name' => 'required|unique:classes|max:25|min:2',
    	]);

    	$data = array();
    	$data['class_name']  = $request->class_name;
    	$addclass = DB::table('classes')->insert($data);
    	return view('class.addclass');
    }

    public function show(){
    	$allclsshow = DB::table('classes')
                    ->orderByRaw('id ASC')
                    ->get();
    	return view('class.showclass', compact('allclsshow'));
    }

    public function singleclsshow($id){
    	$singlecls = DB::table('classes')->where('id', $id)->get();
    	return view('class.showsinglecls',compact('singlecls'));
    }

    public function singleclsdelete($id){
    	DB::table('classes')->where('id', $id)->delete();
    	return redirect()->back();
    }

    public function editcls($id){
    	$editablecls = DB::table('classes')->where('id', $id)->get();
    	return view('class.editclass',compact('editablecls'));
    }

    public function updatecls(Request $request, $id){
    	$data = array();
    	$data['class_name']  = $request->class_name;
    	
    	DB::table('classes')->where('id', $id)->update($data);
    	return redirect()->back();
    }


}
