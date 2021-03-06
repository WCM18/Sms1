<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\classes;
use App\courses;

class classnewcontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {
        //
        $classes_id=$id;
            //dd($classes_id);
          
           $result=courses::where('classes_id','=',$classes_id)->get();
           //dd( $result);
                 //$courses=courses::all();
            return view('courses1',['courses'=>$result,'layout'=>'index']);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $classes=classes::all();
        return view('classes',['classes'=>$classes,'layout'=>'create']);
        
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
        //
        $classes=new classes();
            
        $classes->name=$request->input('name');
        
        $classes->save();
        return redirect('/');
        
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
        $classe=classes::find($id);
        $classes=classes::all();
         return view('classes',['classes'=>$classes,'classe'=>$classe,'layout'=>'show']);
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
        $classe=classes::Find($id);
            $classes=classes::all();
            return view('classes',['classes'=>$classes,'classe'=>$classe,'layout'=>'edit']);
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
        $classe=classes::find($id);
        
        $classe->name=$request->input('name');
        
        
        $classe->save();
        return redirect('/');
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
        $classe=classes::find($id);
    
            
            $classe->delete();
            
            
            return redirect('/' )->with('success','User Deleted');
    }
}
