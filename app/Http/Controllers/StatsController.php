<?php

namespace App\Http\Controllers;

use App\daily;
use App\expense;
use App\Order;
use App\Purchase;
use App\stats;
use Illuminate\Http\Request;

class StatsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        return $request;
        return view('stats.overall');
    }

    public function sale(Request $request)
    {
        $orders = Order::whereBetween('created_at', [$request->endDate, $request->startDate])->get();

        if (count($orders) == 0)
            $orders = Order::whereBetween('created_at', [$request->startDate, $request->endDate])->get();
        // $orders= Order::all();
        return view('stats.sale', compact('orders'));
    }





    public function purchase(Request $request)
    {
        $purchases = Purchase::whereBetween('created_at', [$request->endDate, $request->startDate])->get();
        if (count($purchases) == 0)
            $purchases = Purchase::whereBetween('created_at', [$request->startDate, $request->endDate])->get();
        return view('stats.purchase', compact('purchases'));
    }



    public function expanse(Request $request)
    {

        $dailies = daily::whereBetween('created_at', [$request->endDate, $request->startDate])->get();
        if (count($dailies) == 0)
            $dailies = daily::whereBetween('created_at', [$request->startDate, $request->endDate])->get();
        return view('stats.expense', compact('dailies'));

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
     * @param  \App\stats  $stats
     * @return \Illuminate\Http\Response
     */
    public function show(stats $stats)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\stats  $stats
     * @return \Illuminate\Http\Response
     */
    public function edit(stats $stats)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\stats  $stats
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, stats $stats)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\stats  $stats
     * @return \Illuminate\Http\Response
     */
    public function destroy(stats $stats)
    {
        //
    }
}
