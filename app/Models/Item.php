<?php

namespace App\Models;

use App\Helpers\DateHelper;
use App\Livewire\Items\BarangMaintenance;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Item extends Model
{
    use HasFactory;

    // protected $fillable = [
    //     'name',
    //     'merk',
    //     'type',
    //     'image',
    //     'procurement_year',
    //     'spesification',
    //     'condition',
    //     'location',
    // ];

    protected $appends = [
        'date_convert',
    ];

    protected $guarded = ['id', 'created_at', 'updated_at'];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function itemMaintenances(): HasMany
    {
        return $this->hasMany(BarangMaintenance::class);
    }

    public function itemImages(): HasMany
    {
        return $this->hasMany(ItemImage::class);
    }

    /**
     * @return Attribute
     * Convert date
     */
    protected function dateConvert(): Attribute
    {
        return Attribute::make(get: fn($value) => (new DateHelper)->convertToHumanDateWithoutDayName($this->created_at));
    }
}
