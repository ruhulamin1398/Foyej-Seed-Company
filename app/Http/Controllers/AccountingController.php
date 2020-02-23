<?php

namespace App\Http\Controllers;

use App\accounting;
use App\daily;
use App\Order;
use App\Purchase;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AccountingController extends Controller
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


    public function daily(Request $request)
    {


        // return now()->addDays( 2 )->format( 'Y-m-d h-i-s' )." ". now();






        // $orders = Order::all()->groupBy(function ($item) {
        //     return $item->updated_at->format('d-M-y');
        // })->toArray();

        // foreach ($orders as $key => $order) {

        //     $orders[$key] =array("order"=> array_sum(array_column($orders[$key], 'total')) );
        // }



        // return $orders;



        $dateAccountings = array();


        $orders = Order::whereBetween('created_at', [$request->endDate, $request->startDate])->get()->groupBy(function ($item) {
            return $item->created_at->format('d-M-y');
        })->toArray();

        foreach ($orders as $key => $order) {


            $dateAccountings[$key]['order'] = array_sum(array_column($orders[$key], 'total'));
            $dateAccountings[$key]['productCost'] = array_sum(array_column($orders[$key], 'total'));
        }


        if (count($orders) == 0)
            $orders = Order::whereBetween('created_at', [$request->startDate, $request->endDate])->get()->groupBy(function ($item) {
                return $item->created_at->format('d-M-y');
            })->toArray();
        foreach ($orders as $key => $order) {

            $dateAccountings[$key]["order"] = array_sum(array_column($orders[$key], 'total'));
        }

        $purchases = Purchase::whereBetween('created_at', [$request->endDate, $request->startDate])->get()->groupBy(function ($item) {
            return $item->updated_at->format('d-M-y');
        })->toArray();

        foreach ($purchases as $key => $purchase) {

            $dateAccountings[$key]["purchase"] = array_sum(array_column($purchases[$key], 'total'));
        }


        if (count($purchases) == 0)
            $purchases = Purchase::whereBetween('created_at', [$request->startDate, $request->endDate])->get()->groupBy(function ($item) {
                return $item->updated_at->format('d-M-y');
            })->toArray();

        foreach ($purchases as $key => $purchase) {

            $dateAccountings[$key]["purchase"] = array_sum(array_column($purchases[$key], 'total'));
        }


        return $dateAccountings;

        return view('accounting.daily', compact('dateAccountings'));
    }


    public function monthly(Request $request)
    {
        $orders = Order::whereBetween('created_at', [$request->endDate, $request->startDate])->get();

        if (count($orders) == 0)
            $orders = Order::whereBetween('created_at', [$request->startDate, $request->endDate])->get();
        // $orders= Order::all();
        return view('stats.sale', compact('orders'));
    }




    public function yearly(Request $request)
    {
        $orders = Order::whereBetween('created_at', [$request->endDate, $request->startDate])->get();

        if (count($orders) == 0)
            $orders = Order::whereBetween('created_at', [$request->startDate, $request->endDate])->get();
        // $orders= Order::all();
        return view('stats.sale', compact('orders'));
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
     * @param  \App\accounting  $accounting
     * @return \Illuminate\Http\Response
     */
    public function show(accounting $accounting)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\accounting  $accounting
     * @return \Illuminate\Http\Response
     */
    public function edit(accounting $accounting)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\accounting  $accounting
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, accounting $accounting)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\accounting  $accounting
     * @return \Illuminate\Http\Response
     */
    public function destroy(accounting $accounting)
    {
        //
    }
}
