<?php

namespace App\Http\Controllers;
use DB;
use App\Subject;
use Illuminate\Http\Request;

class SubjectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $getsubject = DB::table('subjects')
                    ->join('classes','subjects.class_id', 'classes.id')
                    ->select('subjects.*', 'classes.class_name')
                    ->get();
        return view('subject.showsubject', compact('getsubject'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $allclsshow = DB::table('classes')->get();
        return view('subject.addsubject', compact('allclsshow'));
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
            'name'      => 'required|max:255',
            'class_id'  => 'required',
        ]);

        $data               = array();
        $data['name']       = $request->name;
        $data['class_id']   = $request->class_id;

        $insert = DB::table('subjects')->insert($data);
        if ($insert) {
            return redirect()->back();
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Subject  $subject
     * @return \Illuminate\Http\Response
     */
    public function show(Subject $subject)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Subject  $subject
     * @return \Illuminate\Http\Response
     */
    public function edit($id){
        $getsubject = DB::table('subjects')
                    ->where('id', $id)
                    ->get();
        $getclass = DB::table('classes')->get();
        return view('subject.editsubject', compact('getsubject', 'getclass'));

    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Subject  $subject
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'name'      => 'required|max:255',
            'class_id'  => 'required',
        ]);


        $data = array();
        $data['name']       = $request->name;
        $data['class_id']   = $request->class_id;

        DB::table('subjects')->where('id', $id)->update($data);
        return redirect()->back();

        //return response()->json($data);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Subject  $subject
     * @return \Illuminate\Http\Response
     */
    public function destroy($id){
        $deletesubject = DB::table('subjects')->where('id', $id)->delete();
        return redirect()->back();
    }
}
