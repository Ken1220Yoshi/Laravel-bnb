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
        Schema::create('amenity_post', function (Blueprint $table) {
            $table->unsignedBigInteger('amenity_id');
            $table->unsignedBigInteger('post_id');


            $table->foreign('amenity_id')->references('id')->on('amenities');
            $table->foreign('post_id')->references('id')->on('amenities');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('amenity_post');
    }
};
