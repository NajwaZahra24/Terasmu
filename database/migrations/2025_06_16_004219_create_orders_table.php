<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
{
    Schema::create('orders', function (Blueprint $table) {
        $table->id();
        $table->string('first_name');
        $table->string('last_name');
        $table->text('address');
        $table->string('phone');
        $table->string('email');
        $table->date('order_date');
        $table->string('product_name');
        $table->integer('quantity');
        $table->decimal('subtotal', 10, 2);
        $table->decimal('total', 10, 2);
        $table->string('payment_method');
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
