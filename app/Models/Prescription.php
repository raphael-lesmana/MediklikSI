<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Prescription extends Model
{
    use HasFactory;
    protected $fillable = [
        'description',
    ];

    public function doctor(): BelongsTo 
    {
        return $this->belongsTo(User::class, 'doctor_id');
    }

    public function pharmacist(): BelongsTo 
    {
        return $this->belongsTo(User::class, 'pharmacist_id');
    }
}
