<?php

namespace App\Providers;

use App\Models\User;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The model to policy mappings for the application.
     *
     * @var array<class-string, class-string>
     */
    protected $policies = [
        // 'App\Models\Model' => 'App\Policies\ModelPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();

        Gate::define('Admin PPE', fn(User $user) => $user->isPpeAdmin());
        Gate::define('Admin Sistem', fn(User $user) => $user->isSystemAdmin());
        Gate::define('Pengelola Sarana dan Prasarana', fn(User $user) => $user->isFacilityInfrastructureManager());
        Gate::define('Pimpinan', fn(User $user) => $user->isChief());
        Gate::define('Verifikator', fn(User $user) => $user->isVerifier());
        Gate::define('Helpdesk', fn(User $user) => $user->isHelpdesk());
        //
    }
}
