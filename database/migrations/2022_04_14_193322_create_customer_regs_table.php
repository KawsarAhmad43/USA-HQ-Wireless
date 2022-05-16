<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCustomerRegsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('customer_regs', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('company');
            $table->string('street1');
            $table->string('street2')->nullable();
            $table->string('postcode');
            $table->string('city');
            $table->string('state');
            $table->string('country');
            $table->string('telephone');
            $table->string('taxvat');
            $table->string('username');
            $table->string('password');
            $table->string('confirmation');
            $table->string('firstname');
            $table->string('lastname');
            $table->string('email');
            $table->string('otp_mobile');
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
        Schema::dropIfExists('customer_regs');
    }
}
