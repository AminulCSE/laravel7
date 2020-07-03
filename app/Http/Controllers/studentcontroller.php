<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class studentcontroller extends Controller
{
    public function addstudent(){
    	$allclsshow = DB::table('classes')->get();
    	return view('student.addstudent', compact('allclsshow'));
    }

    public function studentstore(Request $request){
    	$validatedData = $request->validate([
        'student_name'=> 'required|max:25|min:2',
        'roll'		  => 'required|unique:students|max:25|min:2',
        'class_id' 	  => 'required',
        'image' 	  => 'required|image|mimes:jpeg,png,PNG,JPG,jpg,gif|max:2048',
        'fname' 	  => 'required|max:50|min:2',
        'mname' 	  => 'required|max:50|min:2',
        'gphone' 	  => 'required|max:11|min:2',
        'address' 	  => 'required',
    	]);



    	$data = array();
    	$data['student_name']  	= $request->student_name;
    	$data['roll']  	 		= $request->roll;
    	$data['class_id']		= $request->class_id;
    	$data['image'] 			= $request->image;
    	$data['fname'] 	 		= $request->fname;
    	$data['mname']   		= $request->mname;
    	$data['gphone']  		= $request->gphone;
    	$data['address'] 		= $request->address;

    	$image = $request->file('image');
    		if ($image){
        	$image_name = hexdec(uniqid());
        	$ext = strtolower($image->getClientOriginalExtension());
        	$image_full_name = $image_name.'.'.$ext;
        	$upload_path = 'public/frontend/assets/students/';
        	$image_url = $upload_path.$image_full_name;
        	$success = $image->move($upload_path, $image_full_name);
        	$data['image'] = $image_url;
        	DB::table('students')->insert($data);
    		return Redirect()->back();

        }else{
        	$insert_post = DB::table('students')->insert($data);
	        if ($insert_post) {
	            $notification = array(
	                'message'=>'Post Inserted Successfuly',
	                'alert-type'=>'success'
	            );
	            return Redirect()->back();
	        }
        }
    }

    public function showstudents(){
    	$studentsval = DB::table('students')
    				->join('classes', 'students.class_id', 'classes.id')
    				->select('students.*', 'classes.class_name')
    				->paginate(2);
    	return view('student.showstudent', compact('studentsval'));
    }

    public function deletestudent($id){
    	$studentsval = DB::table('students')->where('id', $id)->first();
    	$image = $studentsval->image;

    	$deletestudent = DB::table('students')->where('id', $id)->delete();
	        if ($deletestudent) {
	        	unlink($image);
	            $notification = array(
	                'message'=>'Post Inserted Successfuly',
	                'alert-type'=>'success'
	            );
    		return redirect()->back();   
    }
    }

    

    public function show_one_student($id){
    	$show_one_student = DB::table('students')
    					->join('classes', 'students.class_id', 'classes.id')
    					->select('students.*', 'classes.class_name')
    					->where('students.id', $id)
    					->get();
    	return view('student.show_single_student',compact('show_one_student'));    
    }

    public function editstudent($id){
    	$class  	 = DB::table('classes')->get();
    	$editstudent = DB::table('students')
    				->where('id', $id)
    				->get();
    	return view('student.editstudent',compact('editstudent','class'));    
    }

    public function updatestudent(Request $request, $id){
    	$validatedData = $request->validate([
        'student_name'=> 'required|max:25|min:2',
        'roll'		  => 'required|max:25|min:2',
        'class_id' 	  => 'required',
        'image' 	  => 'mimes:jpeg,png,PNG,JPG,jpg,gif|max:2048',
        'fname' 	  => 'required|max:50|min:2',
        'mname' 	  => 'required|max:50|min:2',
        'gphone' 	  => 'required|max:25|min:2',
        'address' 	  => 'required',
    	]);

    	$data = array();
    	$data['student_name']  	= $request->student_name;
    	$data['roll']  	 		= $request->roll;
    	$data['class_id']		= $request->class_id;
    	$data['image'] 			= $request->image;
    	$data['fname'] 	 		= $request->fname;
    	$data['mname']   		= $request->mname;
    	$data['gphone']  		= $request->gphone;
    	$data['address'] 		= $request->address;

    	$image = $request->file('image');
    		if($image){
        	$image_name = hexdec(uniqid());
        	$ext = strtolower($image->getClientOriginalExtension());
        	$image_full_name = $image_name.'.'.$ext;
        	$upload_path = 'public/frontend/assets/students/';
        	$image_url = $upload_path.$image_full_name;
        	$success = $image->move($upload_path, $image_full_name);
        	$data['image'] = $image_url;
        	unlink($request->oldimage);
        	DB::table('students')->where('id', $id)->update($data);
    		return redirect()->back();
        }else{
        	$data['image'] = $request->oldimage;
        	$update_student = DB::table('students')->where('id', $id)->update($data);
    		return redirect()->back();
        }
    }






    public function addattendance(Request $request){
        $class_id = $request->class_id;

        $student = DB::table('students')
                    ->join('classes','students.class_id','classes.id')
                    ->select('students.*', 'classes.class_name')
                    ->where('class_id', $class_id)
                    ->get();
        return view('attendance.student.addattendance', compact('student'));
    }


    public function store_student_atten(Request $request){
        $validatedData  = $request->validate([
        'student_id'    => 'required',
        'class_id'      => 'required',
        'status'        => 'required',
        'satt_date'     => 'required',
        ]);

        // $todaydate = date('Y-m-d');
        // $classid = $request->class_id;

        foreach ($request->student_id as $id) {
        $data[]=[
            "student_id"=>$id,
            "class_id"  =>$request->class_id[$id],
            "status"    =>$request->status[$id],
            "satt_date" =>$request->satt_date[$id],
            
            ];
        }

        $insert = DB::table('student_attendances')->insert($data);
            if ($insert){
                $notification = 'Attendance Taken Successfuly';
                return Redirect()->back()->with($notification);
            }
    }

}
