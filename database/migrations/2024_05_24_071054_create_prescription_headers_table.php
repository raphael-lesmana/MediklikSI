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
        Schema::create('prescription_headers', function (Blueprint $table) {
            $table->id();
            $table->foreignId('medical_report_id')->constrained();
            $table->string('notes')->nullable();
            $table->enum('status', ['Pending', 'Processing', 'Ready']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('prescription_headers');
    }
};
