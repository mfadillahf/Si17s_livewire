<?php

namespace App\Models;

use App\Helpers\DateHelper;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class TroubleshootReport extends Model
{
    use HasFactory;

    protected $appends = [
        'date_convert',
    ];

    protected $guarded = ['id', 'created_at', 'updated_at'];

    public function troubleshootCategory(): BelongsTo
    {
        return $this->belongsTo(TroubleshootCategory::class);
    }

    public function troubleshootFiles(): HasMany
    {
        return $this->hasMany(TroubleshootFile::class);
    }

    /**
     * @return Attribute
     * Convert date
     */
    protected function dateConvert(): Attribute
    {
        return Attribute::make(get: fn($value) => (new DateHelper)->convertToHumanDate($this->date));
    }
}
