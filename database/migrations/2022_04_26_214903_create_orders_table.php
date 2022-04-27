<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->string('id_order');
            $table->foreignId('id_buyer')->constrained('users', 'id');
            $table->string('id_cart');
            $table->foreignId('id_transaction')->constrained('transactions', 'id_transaction');
            $table->timestamp('date_order')->nullable();
            // $table->foreignId('id_product')->constrained('products', 'id_product');
            // $table->integer('jumlah')->nullable();
            // $table->string('pilihanSelected')->nullable();
            // $table->string('sizeSelected')->nullable();
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
};
