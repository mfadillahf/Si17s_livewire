<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;


class ServerVisitorReport extends Model
{
    use HasFactory;

    protected $guarded = ['id', 'created_at', 'updated_at'];

    public function institute(): BelongsTo
    {
        return $this->belongsTo(Institute::class);
    }

    public function serverAssetFlows(): HasMany
    {
        return $this->hasMany(ServerAssetFlow::class);
    }

    public function serverAssetInFlows(): HasMany
    {
        return $this->serverAssetFlows()->where('server_asset_category_id', 1);
    }

    public function serverAssetOutFlows(): HasMany
    {
        return $this->serverAssetFlows()->where('server_asset_category_id', 2);
    }

    public function serverVisitors(): HasMany
    {
        return $this->hasMany(ServerVisitor::class);
    }
}
