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
            $table->id('id_transaction');
            $table->string('status');
            $table->mediumText('notes')->nullable();
            $table->string('id_kurir');
            $table->string('id_jenisKurir');
            $table->string('nomorResi')->nullable();
            $table->double('ongkir');
            $table->double('totalCost');
            $table->string('namaPembeli');
            $table->string('emailPembeli');
            $table->string('phonePembeli');
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
