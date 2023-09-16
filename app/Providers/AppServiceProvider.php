<?php

namespace App\Providers;

use Illuminate\Pagination\Paginator as PaginationPaginator;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Validator;
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
        // Validator::extend('strong_password', function ($attribute, $value, $parameters, $validator) {
        //     // Check if the password contains at least one lowercase letter
        //     if (!preg_match('/[a-z]/', $value)) {
        //         return false;
        //     }
    
        //     // Check if the password contains at least one uppercase letter
        //     if (!preg_match('/[A-Z]/', $value)) {
        //         return false;
        //     }
    
        //     // Check if the password contains at least one digit
        //     if (!preg_match('/[0-9]/', $value)) {
        //         return false;
        //     }
    
        //     // Check if the password contains at least one special character
        //     if (!preg_match('/[^a-zA-Z0-9]/', $value)) {
        //         return false;
        //     }
    
        //     // Check if the password has a minimum length of 8 characters
        //     if (strlen($value) < 8) {
        //         return false;
        //     }
    
        //     return true;
        // });
    }
}
