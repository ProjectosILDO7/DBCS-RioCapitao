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
       $this->app->bind(
           'App\repositorios\especialidade\contratos\especInterface',
           'App\repositorios\especialidade\eloquente\especilRepositorio',
        );
        $this->app->bind(
            'App\repositorios\medico\contratos\medicoInterface',
            'App\repositorios\medico\eloquente\medicoRepositorio',
         );
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
