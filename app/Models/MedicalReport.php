<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class MedicalReport extends Model
{
    use HasFactory;

    public function transaction(): BelongsTo
    {
        return $this->belongsTo(TransactionHeader::class);
    }

    public function doctor(): BelongsTo
    {
        return $this->belongsTo(User::class, 'staff_id');
    }
}

