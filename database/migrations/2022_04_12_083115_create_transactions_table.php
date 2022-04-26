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
        Schema::create('transactions', function (Blueprint $table) {
            $table->string('id_transaction')->primary();
            $table->string('status');
            $table->foreignId('id_buyer')->constrained('users', 'id');
            $table->string('id_product');
            $table->mediumText('notes')->nullable();
            $table->timestamp('date_transaction')->nullable();
            $table->timestamp('date_payment')->nullable();
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
        Schema::dropIfExists('transactions');
    }
};
