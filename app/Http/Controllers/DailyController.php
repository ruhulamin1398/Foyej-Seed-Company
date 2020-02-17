<?php

namespace App\Http\Controllers;

use App\daily;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DailyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $dailies= daily::whereDate('created_at',today())->orderBy('id', 'DESC')->get();
        return view('expense.daily',compact('dailies'));
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
        $daily = new daily;
        
        $daily->user_id= Auth::user()->id;;
        $daily->amount= $request->amount;
        $daily->reason= $request->reason;
        $daily->comment= $request->comment;
   

        $daily->save();
        return redirect(route('daily-expenses.index'))->with('successMsg', 'Salary Successfully Added');
    
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\daily  $daily
     * @return \Illuminate\Http\Response
     */
    public function show(daily $daily)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\daily  $daily
     * @return \Illuminate\Http\Response
     */
    public function edit(daily $daily)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\daily  $daily
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, daily $daily)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\daily  $daily
     * @return \Illuminate\Http\Response
     */
    public function destroy(daily $daily)
    {
        //
    }
}
