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
        // app()->singleton('validator', function ($app) {
        //     $validator = new Factory($app['translator'], $app);

        //     // The validation presence verifier is responsible for determining the existence of
        //     // values in a given data collection which is typically a relational database or
        //     // other persistent data stores. It is used to check for "uniqueness" as well.
        //     if (isset($app['db'], $app['validation.presence'])) {
        //         $validator->setPresenceVerifier($app['validation.presence']);
        //     }

        //     return $validator;
        // });
    }
}
