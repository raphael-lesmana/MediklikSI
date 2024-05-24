<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class MedicalReport extends Model
{
    use HasFactory;

    protected $fillable = [
        'patient_id',
        'staff_id',
        'systolic_blood_pressure',
        'diastolic_blood_pressure',
        'respiratory_rate',
        'oxygen_saturation_level',
        'body_temperature',
        'height',
        'weight',
        'symptoms',
        'diagnosis',
        'suggestion',
    ];

    public function patient(): BelongsTo
    {
        return $this->belongsTo(Patient::class);
    }

    public function doctor(): BelongsTo
    {
        return $this->belongsTo(User::class, 'staff_id');
    }

    public function prescription(): BelongsTo
    {
        return $this->belongsTo(PrescriptionHeader::class);
    }
}

