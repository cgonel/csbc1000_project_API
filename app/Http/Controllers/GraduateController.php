<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Graduate;
use App\GraduateDegree;

class GraduateController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $graduatesDegree = GraduateDegree::with('degreeName')->with('schoolName')->with('graduates')->get();

        return $graduatesDegree;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // if (){
            $validatedData = $request->validate([
                'full_name' => 'required',
                'email' => 'required',
                'address' => 'required',
                'phoneno' => 'required'
            ]);

            $graduate = new Graduate;

            $graduate->full_name = $request->full_name;
            $graduate->email = $request->email;
            $graduate->address = $request->address;
            $graduate->phoneno = $request->phoneno;
            $graduate->userHash = Str::uuid();

       
            $graduate->save();

            return "The graduate was added!";
        // } else{
        //     return 'Failed.';
        // }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($userHash)
    {
        $graduate = Graduate::where('userHash', $userHash)->first();
        $graduate_id = $graduate->id;
        
        $graduateDegrees = GraduateDegree::with('degreeName')->with('schoolName')->with('graduates')->where('graduate_degrees.graduate_id', $graduate_id)->get(); 

        return $graduateDegrees;
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
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $userHash)
    {
        $graduate = Graduate::where('userHash', $userHash)->first();

        if($request->full_name){
            $graduate->full_name = $request->full_name;
        }

        if($request->email){
            $graduate->email = $request->email;
        }

        if($request->address){
            $graduate->address = $request->address;
        }

        if($request->phoneno){
            $graduate->phoneno = $request->phoneno;
        }

        $graduate->save();

        return 'Changes done!';
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
    }
}
