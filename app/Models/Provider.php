<?php

namespace App\Models;

use App\Helpers\DateHelper;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Provider extends Model
{
    use HasFactory;

    protected $appends = [
        'date_convert',
    ];

    protected $guarded = ['id', 'created_at', 'updated_at'];

    public function providerDocuments(): HasMany
    {
        return $this->hasMany(ProviderDocument::class);
    }

    /**
     * @return Attribute
     * Convert date
     */
    protected function dateConvert(): Attribute
    {
        return Attribute::make(get: fn($value) => (new DateHelper)->convertToHumanDateWithoutDayName($this->date));
    }
}
