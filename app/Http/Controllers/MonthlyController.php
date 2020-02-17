<?php

namespace App\Http\Controllers;

use App\monthly;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MonthlyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
     
     $monthlies= monthly::orderBy('id', 'DESC')->get();

     // dd($monthlies2);
        return view('expense.monthly',compact('monthlies'));
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
       

        $monthly = new monthly;
  
        $monthly->user_id= Auth::user()->id;;
        $monthly->amount= $request->amount;
        $monthly->month= $request->month;
        $monthly->reason= $request->reason;
        $monthly->comment= $request->comment;
   

        $monthly->save();
        return redirect(route('monthly-expenses.index'))->with('successMsg', 'Salary Successfully Added');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\monthly  $monthly
     * @return \Illuminate\Http\Response
     */
    public function show(monthly $monthly)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\monthly  $monthly
     * @return \Illuminate\Http\Response
     */
    public function edit(monthly $monthly)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\monthly  $monthly
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, monthly $monthly)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\monthly  $monthly
     * @return \Illuminate\Http\Response
     */
    public function destroy(monthly $monthly)
    {
        //
    }
}
