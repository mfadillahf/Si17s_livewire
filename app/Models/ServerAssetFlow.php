<?php

namespace App\Models;

use App\Helpers\DateHelper;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class ServerAssetFlow extends Model
{
    use HasFactory;

    protected $guarded = ['id', 'created_at', 'updated_at'];

    public function serverAssetCategory(): BelongsTo
    {
        return $this->belongsTo(ServerAssetCategory::class);
    }

    public function serverVisitorReport(): BelongsTo
    {
        return $this->belongsTo(ServerVisitorReport::class);
    }

    public function serverAsset(): BelongsTo
    {
        return $this->belongsTo(ServerAsset::class);
    }

}
