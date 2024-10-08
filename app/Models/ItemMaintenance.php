<?php

namespace App\Models;

use App\Helpers\DateHelper;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class ItemMaintenance extends Model
{
    use HasFactory;
    protected $appends = [
        'date_convert',
    ];

    protected $guarded = [
        'id', 
        'created_at', 
        'updated_at'
    ];

    public function item(): BelongsTo
    {
        return $this->belongsTo(Item::class);
    }

    protected function dateConvert(): Attribute
    {
        return Attribute::make(get: fn($value) => (new DateHelper)->convertToHumanDate($this->date));
    }


}
