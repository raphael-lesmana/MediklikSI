<?php

namespace App\Providers;

// use Illuminate\Support\Facades\Gate;
use App\Models\Role;
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
        //
    ];

    /**
     * Register any authentication / authorization services.
     */
    public function boot(): void
    {
        Gate::define('doctor', function (User $user) {
            $doctor_role = Role::where('name', 'doctor')->first()->id;
            return $user->role_id == $doctor_role;
        });

        Gate::define('receptionist', function (User $user) {
            $receptionist_role = Role::where('name', 'receptionist')->first()->id;
            return $user->role_id == $receptionist_role;
        });

        Gate::define('admin', function (User $user) {
            $admin_role = Role::where('name', 'admin')->first()->id;
            return $user->role_id == $admin_role;
        });
    }
}
