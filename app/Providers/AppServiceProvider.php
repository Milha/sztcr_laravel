<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\URL;
use App\Models\User;

class AppServiceProvider extends ServiceProvider
{


    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        // $this->registerPolicies();

        if (env('APP_ENV') === 'production') {
            URL::forceScheme('https');
        }

        Gate::define('edit-radnik', function (User $user) {
            return $user->role === 'admin';
        });

        Gate::define('administrator', function (User $user) {
            return $user->role === 'admin';
        });

        Gate::define('korisnik', function (User $user) {
            return $user->role === 'user';
        });

        Gate::define('zaposleni', function (User $user) {
            return $user->role === 'radnik';
        });

        Gate::define('dobavljac', function (User $user) {
            return $user->role === 'dobavljac';
        });

        Gate::define('admin-ili-radnik', function (User $user) {
            return in_array($user->role, ['administrator', 'radnik']);
        });

        Gate::define('admin-ili-dobavljac', function (User $user) {
            return in_array($user->role, ['administrator', 'dobavljac']);
        });
    }
}
