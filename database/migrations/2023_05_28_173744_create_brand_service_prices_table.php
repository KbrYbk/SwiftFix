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
        Schema::create('brand_service_prices', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('phonebrands_id');
            $table->unsignedBigInteger('services_id');
            $table->integer('price');
            $table->timestamps();

            $table->foreign('phonebrands_id')->references('id')->on('phonebrands')->onDelete('cascade');
            $table->foreign('services_id')->references('id')->on('services')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('brand_service_prices');
    }
};
