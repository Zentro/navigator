<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('quotes', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->dateTime('purchase_datetime');
            $table->integer('gallons_requested');
            $table->decimal('total_price', 10, 2);
            $table->decimal('price_per_gallon', 6, 2);
            $table->string('delivery_address');
            $table->date('delivery_date');
            $table->timestamps();

            // Define foreign key constraint for the user_id column
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('quotes');
    }
};
