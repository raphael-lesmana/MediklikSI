<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class ServiceTransaction extends Model
{
    use HasFactory;

    public function transaction_header(): BelongsTo
    {
        return $this->belongsTo(TransactionHeader::class);
    }
}
