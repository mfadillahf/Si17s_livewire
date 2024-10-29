<?php

namespace App\Models;

use App\Helpers\DateHelper;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class ServerAsset extends Model
{
    use HasFactory;

    protected $guarded = ['id', 'created_at', 'updated_at'];

    public function serverAssetImages(): HasMany
    {
        return $this->hasMany(ServerAssetImage::class);
    }

    public function serverAssetFlows(): HasMany
    {
        return $this->hasMany(ServerAssetFlow::class)->latest();
    }

    public function lastServerAssetFlow(): HasOne
    {
        return $this->hasOne(ServerAssetFlow::class)->latest();
    }
}
