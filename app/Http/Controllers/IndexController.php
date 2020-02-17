<?php

namespace App\Http\Controllers;

use App\Customer;
use App\goal;
use App\Index;
use App\Order;
use App\Product;
use App\Supplier;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $customers = Customer::count();
        $suppliers = Supplier::count();
        $orders = Order::count();
        $products = Product::where('stock','>',0)->count();


       
        $yearlySale = 0;
        $monthlySale = 0;
        $weeklySale = 0;
        $DailySale = 0; 
        $sales = Order::get();
        foreach ($sales as $order) {
            if ($order->created_at->format('y') == now()->format('y')) {
                $yearlySale += $order->total;
                if ($order->created_at->format('ym') == now()->format('ym')) {
                    $monthlySale += $order->total;
                    if ($order->created_at->format('ymd') <= now()->format('ymd') and $order->created_at->format('ymd') >= now()->format('ymd')-7  ) {
                        $weeklySale += $order->total;
                        if ($order->created_at->format('ymd') == now()->format('ymd')) {
                            $DailySale += $order->total;
                        }
                    }
                }
            }
        }


        $goal = goal::find(1);
        $daily = $DailySale  / $goal->daily   *100;
        $weekly = $weeklySale / $goal->weekly   *100;
        $monthly = $monthlySale  /  $goal->monthly  *100;
        $yearly =  $yearlySale / $goal->yearly   *100;

        // //////////////////////

        return view('index',compact('customers','suppliers','orders','products','daily','weekly','monthly','yearly'  ));
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
     * @param  \App\Index  $index
     * @return \Illuminate\Http\Response
     */
    public function show(Index $index)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Index  $index
     * @return \Illuminate\Http\Response
     */
    public function edit(Index $index)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Index  $index
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Index $index)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Index  $index
     * @return \Illuminate\Http\Response
     */
    public function destroy(Index $index)
    {
        //
    }
}
