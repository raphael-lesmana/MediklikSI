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
        Schema::create('medical_reports', function (Blueprint $table) {
            $table->id();
            $table->foreignId('transaction_header_id')->constrained();
            $table->unsignedBigInteger('staff_id');
            $table->foreign('staff_id')->references('id')->on('users');
            $table->integer('systolic_blood_pressure')->nullable();
            $table->integer('diastolic_blood_pressure')->nullable();
            $table->integer('respiratory_rate')->nullable();
            $table->integer('oxygen_saturation_level')->nullable();
            $table->integer('body_temperature')->nullable();
            $table->integer('height')->nullable();
            $table->integer('weight')->nullable();
            $table->string('patient_symptomps', 1000);
            $table->string('diagnose', 5000);
            $table->string('suggestion', 5000);
            $table->foreignId('prescription_id')->nullable()->constrained();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('medical_reports');
    }
};
