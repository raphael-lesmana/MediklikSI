<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Queue extends Model
{
    use HasFactory;
    protected $fillable = [
        'patient_id',
        'staff_id',
    ];

    public function patient(): HasOne
    {
        return $this->hasOne(Patient::class);
    }
}
