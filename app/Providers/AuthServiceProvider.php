<?php

namespace App\Providers;

use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
        // 'App\Model' => 'App\Policies\ModelPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();
        Gate::define('view_user', function ($user) {
            return $user->checkPermissionAccess(config('permissions.access.view_user'));
        });
        Gate::define('create_user', function ($user) {
            return $user->checkPermissionAccess(config('permissions.access.create_user'));
        });
        Gate::define('edit_user', function ($user) {
            return $user->checkPermissionAccess(config('permissions.access.edit_user'));
        });
        Gate::define('delete_user', function ($user) {
            return $user->checkPermissionAccess(config('permissions.access.delete_user'));
        });

        $this->registerPolicies();
        Gate::define('view_roles', function ($user) {
            return $user->checkPermissionAccess(config('permissions.access.view_roles'));
        });
        Gate::define('create_roles', function ($user) {
            return $user->checkPermissionAccess(config('permissions.access.create_roles'));
        });
        Gate::define('edit_roles', function ($user) {
            return $user->checkPermissionAccess(config('permissions.access.edit_roles'));
        });
        Gate::define('delete_roles', function ($user) {
            return $user->checkPermissionAccess(config('permissions.access.delete_roles'));
        });

        $this->registerPolicies();
        Gate::define('view_permission', function ($user) {
            return $user->checkPermissionAccess(config('permissions.access.view_permission'));
        });
        Gate::define('create_permission', function ($user) {
            return $user->checkPermissionAccess(config('permissions.access.create_permission'));
        });
        Gate::define('edit_permission', function ($user) {
            return $user->checkPermissionAccess(config('permissions.access.edit_permission'));
        });
        Gate::define('delete_permission', function ($user) {
            return $user->checkPermissionAccess(config('permissions.access.delete_permission'));
        });

        $this->registerPolicies();
        Gate::define('view_product', function ($user) {
            return $user->checkPermissionAccess(config('permissions.access.view_product'));
        });
        Gate::define('create_product', function ($user) {
            return $user->checkPermissionAccess(config('permissions.access.create_product'));
        });
        Gate::define('edit_product', function ($user) {
            return $user->checkPermissionAccess(config('permissions.access.edit_product'));
        });
        Gate::define('delete_product', function ($user) {
            return $user->checkPermissionAccess(config('permissions.access.delete_product'));
        });
    }
}
