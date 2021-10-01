<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\GraduateDegree;

class CredentialController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
        $validatedData = $request->validate([
            'graduate_id' => 'required',
            'degree_name_id' => 'required',
            'school_name_id' => 'required',
            'year_issued' => 'required'
        ]);

        $degree = new GraduateDegree;

        $degree->graduate_id = $request->graduate_id;
        $degree->degree_name_id = $request->degree_name_id;
        $degree->school_name_id = $request->school_name_id;
        $degree->year_issued = $request->year_issued;

        $degree->save();

        return "The degree has been entered!";
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
    public function update(Request $request, $id)
    {
        $degree = GraduateDegree::find($id);

        if($request->graduate_id){
            $degree->graduate_id = $request->graduate_id;
        }

        if($request->degree_name_id){
            $degree->degree_name_id = $request->degree_name_id;
        }

        if($request->school_name_id){
            $degree->school_name_id = $request->school_name_id;
        }

        if($request->year_issued){
            $degree->year_issued = $request->year_issued;
        }

        $degree->save();

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
