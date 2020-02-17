<?php

namespace App\Http\Controllers;

use App\goal;
use App\Order;
use Illuminate\Http\Request;

class GoalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $goal = goal::find(1);
        $daily = $goal->daily;
        $weekly = $goal->weekly;
        $monthly = $goal->monthly;
        $yearly = $goal->yearly;

        return view('goal', compact('daily', 'weekly', 'monthly', 'yearly'));
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
     * @param  \App\goal  $goal
     * @return \Illuminate\Http\Response
     */
    public function show(goal $goal)
    {

     
      
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\goal  $goal
     * @return \Illuminate\Http\Response
     */
    public function edit(goal $goal)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\goal  $goal
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, goal $goal)
    {
        //
    }
    public function goalUpdate(Request $request)
    {
        $goal = goal::find(1);

        $goal->daily = $request->daily;
        $goal->weekly = $request->weekly;
        $goal->monthly = $request->monthly;
        $goal->yearly = $request->yearly;

        $goal->save();



        return redirect(route('goals.index'))->with('successMsg', 'Goal Successfully updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\goal  $goal
     * @return \Illuminate\Http\Response
     */
    public function destroy(goal $goal)
    {
        //
    }
}
