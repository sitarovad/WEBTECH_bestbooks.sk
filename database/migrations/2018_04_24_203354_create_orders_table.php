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
            $table->increments('id');
            $table->double('total_price');
            $table->unsignedInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users');
            $table->unsignedInteger('shipping_id');
            $table->foreign('shipping_id')->references('id')->on('shippings');
            $table->unsignedInteger('payment_id');
            $table->foreign('payment_id')->references('id')->on('payments');
            $table->unsignedInteger('delivery_data_id');
            $table->foreign('delivery_data_id')->references('id')->on('delivery_datas');
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
