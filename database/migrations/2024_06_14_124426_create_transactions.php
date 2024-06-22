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
        Schema::create('transactions', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('name');
            $table->string('phone');
            $table->string('people');
            $table->dateTime('datetime');
            $table->string('status');
            $table->string('request');

            $table->unsignedBigInteger('user_id');
            
            $table->unsignedBigInteger('restaurant_id');

            $table->foreign('user_id')->references('id')->on('users2');
            $table->foreign('restaurant_id')->references('id')->on('restaurants');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('transactions');
    }
};
