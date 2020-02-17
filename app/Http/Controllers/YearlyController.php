<?php

namespace App\Http\Controllers;

use App\yearly;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class YearlyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
     $yearlies= yearly::orderBy('id', 'DESC')->get();

     // dd($yearlies2);
        return view('expense.yearly',compact('yearlies'));
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
        $yearly = new yearly;

        $yearly->user_id= Auth::user()->id;;
        $yearly->amount= $request->amount;
        $yearly->year= $request->year;
        $yearly->reason= $request->reason;
        $yearly->comment= $request->comment;
   

        $yearly->save();
        return redirect(route('yearly-expenses.index'))->with('successMsg', 'Salary Successfully Added');
  
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\yearly  $yearly
     * @return \Illuminate\Http\Response
     */
    public function show(yearly $yearly)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\yearly  $yearly
     * @return \Illuminate\Http\Response
     */
    public function edit(yearly $yearly)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\yearly  $yearly
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, yearly $yearly)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\yearly  $yearly
     * @return \Illuminate\Http\Response
     */
    public function destroy(yearly $yearly)
    {
        //
    }
}
