<?php

namespace App\Http\Controllers;

use App\staff;
use Illuminate\Http\Request;

class StaffController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $staffs= staff::all();
        
        return view('staff.staff',compact('staffs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
    
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $staff = new staff;
        $staff->name= $request->name;
        $staff->phone= $request->phone;
        $staff->address= $request->address;
        $staff->sallery= $request->sallery;
        $staff->post= $request->post;

        $staff->save();
        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\staff  $staff
     * @return \Illuminate\Http\Response
     */
    public function show(staff $staff)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\staff  $staff
     * @return \Illuminate\Http\Response
     */
    public function edit(staff $staff)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\staff  $staff
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, staff $staff)
    {
        //
    }



    public function staffsUpdate(Request $request)
    {
        $staff =  staff::find($request->id);
        $staff->name= $request->name;
        $staff->phone= $request->phone;
        $staff->address= $request->address;
        $staff->sallery= $request->sallery;
        $staff->post= $request->post;

        $staff->save();
        return redirect(route('staffs.index'))->with('successMsg', 'supplier Successfully updated');
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\staff  $staff
     * @return \Illuminate\Http\Response
     */
    public function destroy(staff $staff)
    {
        //
    }
}
