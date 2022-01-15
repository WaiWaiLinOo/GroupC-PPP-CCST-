<?php

namespace App\Providers;

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
         // Dao Registration
         $this->app->bind('App\Contracts\Dao\User\UserDaoInterface', 'App\Dao\User\UserDao');
         $this->app->bind('App\Contracts\Dao\User\AuthDaoInterface', 'App\Dao\User\AuthDao');

         // Business logic registration
         $this->app->bind('App\Contracts\Services\User\UserServiceInterface', 'App\Services\User\UserService');
         $this->app->bind('App\Contracts\Services\User\AuthServiceInterface', 'App\Services\User\AuthService');
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
