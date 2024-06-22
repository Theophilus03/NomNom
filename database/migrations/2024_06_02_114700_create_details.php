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
        Schema::create('details', function (Blueprint $table) {
            $table->id();
            $table->string('address');
            $table->integer('time_open');
            $table->integer('time_close');
            $table->string('price');

            $table->string('address_detail');
            $table->string('phone');
            $table->string('price_range');
            $table->string('award');
            $table->string('gmaps', 1000);
            


            $table->unsignedBigInteger('restaurant_id');

            $table->foreign('restaurant_id')->references('id')->on('restaurants');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('details');
    }
};
