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
        Schema::create('service_transactions', function (Blueprint $table) {
            $table->id();
            $table->foreignId('transaction_header_id')->constrained();
            $table->string('service_description', 1000);
            $table->integer('service_price');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('service_transactions');
    }
};
