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
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->foreignId('brand_id');
            $table->foreign('brand_id')->references('id')->on('brands')->onDelete('cascade');
            $table->foreignId('category_id');
            $table->foreign('category_id')->references('id')->on('categories')->onDelete('cascade');
            $table->string('slug')->unique();
            $table->string('primary_image');
            $table->text('description');
            $table->unsignedInteger('price');
            $table->unsignedInteger('delivery_cost')->nullable();
            $table->unsignedInteger('discounted_price')->nullable();
            $table->integer('status')->default(0);
            $table->timestamps();
            $table->string('creates_by');
            $table->string('updates_by');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
