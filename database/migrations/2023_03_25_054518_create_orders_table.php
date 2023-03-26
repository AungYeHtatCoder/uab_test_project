<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('orders', function (Blueprint $table) {
             $table->id();
            $table->string('paymentmethod');
            $table->string('card_name');
            $table->date('exp_date');
            $table->string('card_no');
            $table->string('cvv_no');
            $table->unsignedBigInteger('user_id');
            $table->string('total_price');
            $table->string('order_status')->default('pending');
            $table->date('order_date');
            $table->time('order_time');
            $table->string('order_number');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('orders');
    }
};