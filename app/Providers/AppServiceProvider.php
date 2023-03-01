<?php

namespace App\Providers;

use App\Models\User;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Blade;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Gate::define('Admin', function(User $user){
            return $user->role == 'Admin';
        });

        Gate::define('Staff', function(User $user){
            return $user->role == 'Staff';
        });

        Gate::define('Member', function(User $user){
            return $user->role == 'Member';
        });

        // Pagination
        Paginator::useBootstrapFive();

        Blade::directive('rupiah', function ($amount) {
            return "<?php echo 'Rp' . number_format($amount,0,',','.'); ?>";
        });
    }
}
