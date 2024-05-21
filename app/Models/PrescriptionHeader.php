<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class PrescriptionHeader extends Model
{
    use HasFactory;

    protected $fillable = [
        'notes',
    ];

    public function prescription_details(): HasMany
    {
        return $this->hasMany(PrescriptionDetails::class);
    }
}
