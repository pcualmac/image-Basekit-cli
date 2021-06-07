<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Support\ClassValidation;
class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        app()->singleton('ClassValidation',function(){
            return new ClassValidation();
        });
    }
}
