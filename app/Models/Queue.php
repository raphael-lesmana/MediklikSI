<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Queue extends Model
{
    use HasFactory;
    protected $fillable = [
        'patient_id',
        'staff_id',
    ];

    public function patient(): BelongsTo
    {
        return $this->belongsTo(Patient::class);
    }
    public function staff(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function user_queue(): HasOne
    {
        return $this->hasOne(UserQueue::class);
    }
}
