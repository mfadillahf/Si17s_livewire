<?php

namespace App\Models;

use App\Helpers\DateHelper;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class agenda extends Model
{
    use HasFactory;
    
    protected $appends = [
        'started_at_convert',
        'finished_at_convert',
    ];

    protected $guarded = ['id', 'created_at', 'updated_at'];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }


    /**
     * @return Attribute
     * Convert date
     */
    protected function startedAtConvert(): Attribute
    {
        return Attribute::make(get: fn($value) => (new DateHelper)->convertToHumanDateWithoutDayName($this->started_at));
    }

    protected function finishedAtConvert(): Attribute
    {
        return Attribute::make(get: fn($value) => (new DateHelper)->convertToHumanDateWithoutDayName($this->finished_at));
    }
}
