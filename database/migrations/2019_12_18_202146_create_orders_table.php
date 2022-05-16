<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

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
            $table->string('order_date')->nullable();
            $table->string('tracking_no')->nullable();
            $table->string('customer_name')->nullable();


            $table->string('company')->nullable();
            $table->string('strline')->nullable();
            $table->string('addoptional')->nullable();
            $table->string('city')->nullable();
            $table->string('postcode')->nullable();
            $table->string('state')->nullable();
            $table->string('country')->nullable();
            $table->string('paymeth')->nullable();




            $table->string('customer_phone');
            $table->string('lname')->nullable();
            $table->string('customer_email')->nullable();
            $table->string('customer_area')->nullable();
            $table->string('subtotal_cost')->nullable();
            $table->string('deliver_cost')->nullable();
            $table->string('total_cost')->nullable();
            $table->string('delivery_address')->nullable();
            $table->string('delivery_status')->nullable();
            $table->string('status')->nullable();
            $table->timestamps();
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
