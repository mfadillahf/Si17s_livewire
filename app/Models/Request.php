<?php

namespace App\Models;

use App\Helpers\DateHelper;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Request extends Model
{
    use HasFactory;

    protected $guarded = ['id', 'created_at', 'updated_at'];
    protected $appends = ['converted_end_period', 'converted_start_period'];

    public function appUsers(): BelongsToMany
    {
        return $this->belongsToMany(AppUser::class, 'app_user_request', 'request_id', 'app_user_id');
    }

    public function institute(): BelongsTo
    {
        return $this->belongsTo(Institute::class);
    }

    public function documentArchive(): BelongsTo
    {
        return $this->belongsTo(DocumentArchive::class);
    }

    /**
     * @return Attribute
     * Convert date
     */
    protected function convertedStartPeriod(): Attribute
    {
        empty($this->start_period) ? $date = '2020-02-02' : $date = $this->start_period;
        return Attribute::make(get: fn($value) => (new DateHelper)->convertToHumanDateWithoutDayName($date));
    }

    protected function convertedEndPeriod(): Attribute
    {
        empty($this->end_period) ? $date = '2020-02-02' : $date = $this->end_period;
        return Attribute::make(get: fn($value) => (new DateHelper)->convertToHumanDateWithoutDayName($date));
    }

}
