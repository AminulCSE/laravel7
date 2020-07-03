<?php

namespace App\Http\Controllers;
use DB;
use App\Result;
use Illuminate\Http\Request;

class ResultController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $showresult = DB::table('results')
                    ->join('students', 'results.student_id','students.id')
                    ->join('classes','results.class_id','classes.id')
                    ->join('subjects','results.subject_id', 'subjects.id')
                    ->select('results.*', 'students.student_name', 'classes.class_name', 'subjects.name')
                    ->get();
        return view('result.showresult',compact('showresult'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $students   = DB::table('students')->get();
        $classes    = DB::table('classes')->get();
        $subjects   = DB::table('subjects')->get();
        return view('result.addresult', compact('students', 'classes', 'subjects'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
        'roll'              => 'required',
        'class_id'          => 'required',
        'student_id'        => 'required',
        'subject_id'           => 'required',
        'number'            => 'required',
        'commants'          => 'required',
        ]);


        $data = array();
        $data['roll']           = $request->roll;
        $data['class_id']       = $request->class_id;
        $data['student_id']     = $request->student_id;
        $data['subject_id']     = $request->subject_id;
        $data['number']         = $request->number;
        $data['commants']       = $request->commants;
        $addclass = DB::table('results')->insert($data);
        return redirect()->back();

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Result  $result
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Result  $result
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $editresult = DB::table('results')
                    ->where('id',$id)
                    ->first();
        $getclass   = DB::table('classes')->get();
        $getstudent = DB::table('students')->get();
        $getsubject = DB::table('subjects')->get();
        return view('result.editresult', compact('editresult','getclass','getstudent','getsubject'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Result  $result
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
        'roll'              => 'required',
        'class_id'          => 'required',
        'student_id'        => 'required',
        'subject_id'        => 'required',
        'number'            => 'required',
        'commants'          => 'required',
        ]);


        $data = array();
        $data['roll']           = $request->roll;
        $data['class_id']       = $request->class_id;
        $data['student_id']     = $request->student_id;
        $data['subject_id']     = $request->subject_id;
        $data['number']         = $request->number;
        $data['commants']       = $request->commants;
        $addclass = DB::table('results')
                    ->where('id',$id)
                    ->update($data);
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Result  $result
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $del = DB::table('results')->where('id', $id)->delete();
        return redirect()->back();
    }




    // Studentwise Result

    public function search_result_by_student(){
        $stnt = DB::table('students')->get();
        return view('result.search_studentwise_result', compact('stnt'));
    }






}