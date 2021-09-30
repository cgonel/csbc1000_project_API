<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
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
        // return Graduate::with('graduate_degrees')->with('degreeName')->with('schoolName')->get();
        // $data = Graduate::with('graduate_degrees')->get();
        // $data = Graduate::with('graduate_degrees')->find(17);
        // $data = Graduate::with('graduate_degrees')->with('degreeName')->with('schoolName')->get();
        // return GraduateDegree::with('degreeName')->with('schoolName')->get();
        // dd($data);

        // $graduate = Graduate::with('graduate_degrees')->get();
        // $graduateDegree = GraduateDegree::with('degreeName')->with('schoolName')->get();

        // $subQuery = GraduateDegree::with('degreeName')->with('schoolName')->get();

        // $graduates = Graduate::joinSub($subQuery, 'graduate_degrees', function($join) {
        //     $join->on('graduates.id', '=', 'graduate_degrees.graduate_id');
        // })->get();

        // $result = $graduate->merge($graduateDegree);

        $graduateDegree = GraduateDegree::with('degreeName')->with('schoolName')->with('graduates')->get();

        return $graduateDegree;

        // dd($graduateDegree);

        // dd($graduateDegree->graduates);

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
        //
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
    public function update(Request $request, $id)
    {
        //
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
