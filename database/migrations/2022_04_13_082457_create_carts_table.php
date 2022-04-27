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
        Schema::create('carts', function (Blueprint $table) {
            $table->id('id_cart');
            $table->foreignId('id_user')->constrained('users', 'id');
            $table->string('status')->nullable();
            $table->foreignId('id_product')->constrained('products', 'id_product');
            $table->integer('jumlah')->nullable();
            $table->string('pilihanSelected')->nullable();
            $table->string('sizeSelected')->nullable();
            $table->mediumText('note')->nullable();
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
        Schema::dropIfExists('carts');
    }
};
