<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {

            
            $table->bigIncrements('id');
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('customer_id')->nullable();
            $table->unsignedBigInteger('pay')->nullable()->defult(0);
            $table->double('cost',10,2)->default(0);;
            $table->double('due',10 ,2)->default(0);;
            $table->double('pre_due',10,2)->default(0);
            $table->double('discount',10,2)->nullable();;
            $table->double('total',10,2);

            $table->double('total_discount',8,2)->nullable();;
            $table->double('total_profit',8,2)->nullable();;
            

            $table->double('payment',8,2)->nullable();;
            $table->timestamps();

            
            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('customer_id')->references('id')->on('customers');




          
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('orders');
    }
}
