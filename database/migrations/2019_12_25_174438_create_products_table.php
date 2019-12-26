<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('barcode');
            $table->string('name');
            $table->unsignedBigInteger('catagory_id');
            $table->string('cost');
            $table->string('price');
            $table->date('expire_data');
            
            $table->unsignedBigInteger('stock');
            $table->unsignedBigInteger('sell');
            $table->unsignedBigInteger('low-limit');
   
            


            $table->foreign('catagory_id')->references('id')->on('categories');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('products');
    }
}
