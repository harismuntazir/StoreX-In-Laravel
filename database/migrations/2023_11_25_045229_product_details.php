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
        Schema::create('product_details', function (Blueprint $table) {
            $table->id();
            $table->string('product_name')->unique();
            $table->longText('product_description')->nullable();
            $table->decimal('product_buy_price', 10, 2)->unsigned()->nullable();
            $table->decimal('product_sell_price', 10, 2)->unsigned()->nullable();
            $table->integer('product_quantity')->unsigned()->default(0);
            $table->timestamps();
        });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('product_details');
    }
};
