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
            $table->string('name');
            $table->unsignedBigInteger('catagory_id');
            $table->unsignedBigInteger('product_type_id');
            $table->unsignedBigInteger('cost')->nullable();
            $table->unsignedBigInteger('price');
            $table->date('expire_date')->nullable();
            
            $table->unsignedBigInteger('stock')->default(0);
            $table->unsignedBigInteger('sell')->default(0);
            $table->unsignedBigInteger('low_limit')->default(0);
   
            


            $table->foreign('catagory_id')->references('id')->on('categories');
            $table->foreign('product_type_id')->references('id')->on('product_types');
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
