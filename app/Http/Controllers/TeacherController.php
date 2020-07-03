<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Teacher;


class TeacherController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(){
        $teacher = Teacher::paginate(3);
        return view('teacher.showteacher', compact('teacher'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(){
        return view('teacher.addteacher');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request){
        $validatedData = $request->validate([
        'teacher_name'=> 'required|max:25|min:2',
        'department'  => 'required|max:25|min:2',
        'phone'       => 'required|unique:teachers|max:25|min:2',
        'image'       => 'image|mimes:jpeg,png,PNG,JPG,jpg,gif|max:2048',
        'email'       => 'required|unique:teachers|max:25|min:2',
        'address'     => 'required|max:120|min:2',
        'joining_date'=> 'required',
        ]);


        $teachers = new Teacher;

        $teachers->teacher_name = $request->teacher_name;
        $teachers->department   = $request->department;
        $teachers->phone        = $request->phone;
        $image                  = $request->file('image');
        $teachers->email        = $request->email;
        $teachers->address      = $request->address;
        $teachers->joining_date = $request->joining_date;

            if ($image){
            $image_name         = hexdec(uniqid());
            $ext                = strtolower($image->getClientOriginalExtension());
            $image_full_name    = $image_name.'.'.$ext;
            $upload_path        = 'public/frontend/assets/teachers/';
            $image_url          = $upload_path.$image_full_name;
            $success            = $image->move($upload_path, $image_full_name);
            $teachers->image    = $image_url;
            $teachers->save();
            return redirect()->back();
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id){
        $teachersoneval = Teacher::where('id', $id)->get();
        return view('teacher.show_one_teacher', compact('teachersoneval'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id){
        $teacherval = Teacher::where('id', $id)->get();
        return view('teacher.editteacher', compact('teacherval'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id){
        $teachers = Teacher::findorfail($id);

        $validatedData = $request->validate([
        'teacher_name'=> 'required|max:25|min:2',
        'department'  => 'required|max:25|min:2',
        'phone'       => 'required|max:25|min:2',
        'image'       => 'image|mimes:jpeg,png,PNG,JPG,jpg,gif|max:2048',
        'email'       => 'required|max:25|min:2',
        'address'     => 'required|max:120|min:2',
        'joining_date'=> 'required',
        ]);

        $teachers->teacher_name = $request->teacher_name;
        $teachers->department   = $request->department;
        $teachers->phone        = $request->phone;
        $teachers->image        = $request->image;
        $image                  = $request->file('image');
        $teachers->email        = $request->email;
        $teachers->address      = $request->address;
        $teachers->joining_date = $request->joining_date;

            if ($image){
            $image_name = hexdec(uniqid());
            $ext = strtolower($image->getClientOriginalExtension());
            $image_full_name = $image_name.'.'.$ext;
            $upload_path = 'public/frontend/assets/teachers/';
            $image_url = $upload_path.$image_full_name;
            $success = $image->move($upload_path, $image_full_name);
            $teachers->image = $image_url;
            unlink($request->oldimage);
            $teachers->save();
            return redirect()->back();
        }else{
            $teachers->image = $request->oldimage;
            $update_teachers = $teachers->save();
            if ($update_teachers) {
                $notification = array(
                    'message'=>'Post Inserted Successfuly',
                    'alert-type'=>'success'
                );
            return redirect()->back();
            }
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id){
        $teacherval = Teacher::where('id', $id)->first();
        $image = $teacherval->image;

        $teacherdel = Teacher::findorfail($id);
        $teacherdel->delete();

        if ($teacherdel) {
            unlink($image);
            return redirect()->back();
        }
    }
}
