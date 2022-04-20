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
        Schema::create('alamats', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_user')->constrained('users', 'id');
            $table->string('type_address', 25);
            // $table->string('country');
            $table->foreignId('id_province');
            $table->foreignId('city_id');
            // $table->string('subdistric');
            $table->string('detail_address')->nullable();
            $table->string('zipcode');
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
        Schema::dropIfExists('address');
    }
};