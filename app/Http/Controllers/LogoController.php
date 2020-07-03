<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Logo;
use DB;
class LogoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(){
        $showlogo = Logo::all();
        return view('logo.showlogo', compact('showlogo'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(){
        return view('logo.addlogo');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request){
        $validatedData = $request->validate([
        'image'        => 'image|mimes:jpeg,png,PNG,JPG,jpg,gif|max:2048',
        ]);

        $teachers = new Logo;
        $image    = $request->file('image');

        if ($image){
            $image_name         = hexdec(uniqid());
            $ext                = strtolower($image->getClientOriginalExtension());
            $image_full_name    = $image_name.'.'.$ext;
            $upload_path        = 'public/frontend/assets/logo/';
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
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id){
        $logoval = Logo::where('id', $id)->get();
        return view('logo.editlogo', compact('logoval'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id){
        $logo = Logo::findorfail($id);
        $validatedData = $request->validate([
        'image'       => 'image|mimes:jpeg,png,PNG,JPG,jpg,gif|max:2048',
        ]);

        $logo->image  = $request->image;
        $logo->status = $request->status;
        $image        = $request->file('image');

            if ($image){
            $image_name     = hexdec(uniqid());
            $ext            = strtolower($image->getClientOriginalExtension());
            $image_full_name = $image_name.'.'.$ext;
            $upload_path    = 'public/frontend/assets/logo/';
            $image_url      = $upload_path.$image_full_name;
            $success        = $image->move($upload_path, $image_full_name);
            $logo->image    = $image_url;
            unlink($request->oldimage);
            $logo->save();
            return redirect()->back();
        }else{
            $logo->image = $request->oldimage;
            $update_logo = $logo->save();
            if ($update_logo) {
                $notification = array(
                    'message'=>'Logo Inserted Successfuly',
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
        $getlogoimg = DB::table('logos')->where('id', $id)->first();
        $dellogo    = DB::table('logos')->where('id',$id)->delete();

        if ($dellogo) {
            unlink($getlogoimg->image);
            return redirect()->back();
        }        
    }






    
}
