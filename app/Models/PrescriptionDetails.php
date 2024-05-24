<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasOne;

class PrescriptionDetails extends Model
{
    use HasFactory;

    protected $fillable = [
        'prescription_header_id',
        'medicine_id',
        'dose',
        'amount',
    ];

    public function prescription_header(): BelongsTo
    {
        return $this->belongsTo(PrescriptionHeader::class);
    }
}
