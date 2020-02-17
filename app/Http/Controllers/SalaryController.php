<?php

namespace App\Http\Controllers;

use App\salary;
use App\staff;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SalaryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $staffs=  staff::all();
        $salaries=salary::all();
        return view('staff.salary',compact('salaries','staffs'));
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
        
        $salary = new salary;
        $salary->user_id= Auth::user()->id;
        $salary->staff_id= $request->staff;
        // $salary->month= $request->month.now()->format('-d H:i:s');;
       // $salary->month= $request->month.'-10 0:0:0';
        $salary->month= $request->month;
      
        $salary->price= $request->price;
        $salary->comment= $request->comment;
   

        $salary->save();
        return redirect(route('salaries.index'))->with('successMsg', 'Salary Successfully Added');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\salary  $salary
     * @return \Illuminate\Http\Response
     */
    public function show(salary $salary)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\salary  $salary
     * @return \Illuminate\Http\Response
     */
    public function edit(salary $salary)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\salary  $salary
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, salary $salary)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\salary  $salary
     * @return \Illuminate\Http\Response
     */
    public function destroy(salary $salary)
    {
        //
    }
}
