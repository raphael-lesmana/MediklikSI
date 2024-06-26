<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Patient extends Model
{
    protected $fillable = [
        'name',
        'gender',
        'dob',
        'phone',
        'email',
    ];
    use HasFactory;

    public function queue(): HasOne
    {
        return $this->hasOne(Queue::class);
    }

    public function transactions(): HasMany
    {
        return $this->hasMany(TransactionHeader::class);
    }

    public function medical_report(): HasMany
    {
        return $this->hasMany(MedicalReport::class);
    }
}
