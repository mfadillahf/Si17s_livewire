<?php

namespace App\Models;

use App\Helpers\DateHelper;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class ConsultationReport extends Model
{
    use HasFactory;

    protected $appends = [
        'converted_started_at',
        'converted_finished_at'
    ];

    protected $guarded = ['id', 'created_at', 'updated_at'];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function reportCategory(): BelongsTo
    {
        return $this->belongsTo(ReportCategory::class);
    }

    public function mediaReport(): BelongsTo
    {
        return $this->belongsTo(MediaReport::class);
    }

    public function consultationDocuments(): HasMany
    {
        return $this->hasMany(ConsultationDocument::class);
    }

    /**
     * @return Attribute
     * Convert date
     */
    protected function convertedStartedAt(): Attribute
    {
        return Attribute::make(get: fn($value) => (new DateHelper)->convertToHumanDateWithoutDayName($this->started_at));
    }

    protected function convertedFinishedAt(): Attribute
    {
        return Attribute::make(get: fn($value) => (new DateHelper)->convertToHumanDateWithoutDayName($this->finished_at));
    }
}
