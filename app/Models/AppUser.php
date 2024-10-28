<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class AppUser extends Model
{
    use HasFactory;

    protected $guarded = ['id', 'created_at', 'updated_at'];

    public function userType(): BelongsTo
    {
        return $this->belongsTo(UserType::class);
    }

    public function reportCategory(): BelongsTo
    {
        return $this->belongsTo(ReportCategory::class);
    }
}
