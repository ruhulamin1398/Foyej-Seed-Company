<?php

namespace App\Http\Controllers;

use App\orderReturnProduct;
use App\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class OrderReturnProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $orderReturnProducts = orderReturnProduct::all();
        return view('customer.orderReturnProduct',compact('orderReturnProducts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
  ///
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $orderReturnProduct= new orderReturnProduct;

        $orderReturnProduct->user_id= Auth::user()->id;
        $orderReturnProduct->product_id= $request->product_id;
        $orderReturnProduct->customer_id= $request->customer_id;
        $orderReturnProduct->quantity= $request->quantity;
        $orderReturnProduct->price= $request->price;
        $orderReturnProduct->profit= $orderReturnProduct->quantity * $orderReturnProduct->product->cost-$request->price;
        $orderReturnProduct->save();


        $product = Product::find($request->product_id);
        $product->stock = $product->stock + $request->quantity;
        $product->save();

        
        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\orderReturnProduct  $orderReturnProduct
     * @return \Illuminate\Http\Response
     */
    public function show(orderReturnProduct $orderReturnProduct)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\orderReturnProduct  $orderReturnProduct
     * @return \Illuminate\Http\Response
     */
    public function edit(orderReturnProduct $orderReturnProduct)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\orderReturnProduct  $orderReturnProduct
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, orderReturnProduct $orderReturnProduct)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\orderReturnProduct  $orderReturnProduct
     * @return \Illuminate\Http\Response
     */
    public function destroy(orderReturnProduct $orderReturnProduct)
    {
        //
    }
}
