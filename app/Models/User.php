<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Laravel\Sanctum\HasApiTokens;
use Laravel\Jetstream\HasProfilePhoto;
use Illuminate\Notifications\Notifiable;
use Laravel\Fortify\TwoFactorAuthenticatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class User extends Authenticatable
{
    use HasApiTokens;

    /** @use HasFactory<\Database\Factories\UserFactory> */
    use HasFactory;
    use HasProfilePhoto;
    use Notifiable;
    use TwoFactorAuthenticatable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
        'two_factor_recovery_codes',
        'two_factor_secret',
    ];

    /**
     * The accessors to append to the model's array form.
     *
     * @var array<int, string>
     */
    protected $appends = [
        'profile_photo_url',
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }

    protected $guarded = ['id', 'created_at', 'updated_at'];

    public function roles(): BelongsToMany
    {
        return $this->belongsToMany(Role::class, 'role_user', 'user_id', 'role_id');
    }

    public function hasRole(string $roleName): bool
    {
        foreach ($this->roles as $role)
            if ($role->name === $roleName) return true;

        return false;
    }

    public function isPpeAdmin(): bool
    {
        return $this->hasRole('Admin PPE');
    }

    public function isSystemAdmin(): bool
    {
        return $this->hasRole('Admin Sistem');
    }

    public function isFacilityInfrastructureManager(): bool
    {
        return $this->hasRole('Pengelola Sarana dan Prasarana');
    }

    public function isChief(): bool
    {
        return $this->hasRole('Pimpinan');
    }

    public function isHelpdesk(): bool
    {
        return $this->hasRole('Helpdesk');
    }

    public function isVerifier(): bool
    {
        return $this->hasRole('Verifikator');
    }

}
