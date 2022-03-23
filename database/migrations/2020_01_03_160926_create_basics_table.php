<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBasicsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('basics', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('contact_no')->nullable();
            $table->string('phone')->nullable();
            $table->string('logo');
            $table->string('website')->nullable();
            $table->string('delivery_cost1');
            $table->string('delivery_cost2');
            $table->longText('inside_details')->nullable();
            $table->longText('outside_details')->nullable();
            $table->longText('header_code')->nullable();
            $table->longText('footer_code')->nullable();
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
        Schema::dropIfExists('basics');
    }
}
