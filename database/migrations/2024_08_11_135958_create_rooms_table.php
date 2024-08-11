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
        Schema::create('rooms', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->integer('price');
            $table->boolean('cancellation');
            $table->boolean('pay_later');
            $table->longText('policy')->nullable();
            $table->longText('room_features')->nullable();
            $table->integer('max_occupancy');
            $table->integer('bed_configuration');
            $table->integer('room_size');
            $table->integer('bathrooms');
            $table->longText('room_view')->nullable();
            $table->boolean('smoking_policy');
            $table->longText('amenities')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('rooms');
    }
};
