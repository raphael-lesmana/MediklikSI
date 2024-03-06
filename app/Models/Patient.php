<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Patient extends Model
{
    protected $fillable = [
        'patient_name',
        'patient_gender',
        'patient_dob',
        'patient_phone',
    ];
    use HasFactory;

    public function queue(): HasOne
    {
        return $this->hasOne(Queue::class);
    }
}
