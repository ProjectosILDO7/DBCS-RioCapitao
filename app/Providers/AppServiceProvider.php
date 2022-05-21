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
         $this->app->bind(
            'App\repositorios\paciente\contratos\pacienteInterface',
            'App\repositorios\paciente\eloquente\pacienteRepositorio',
         );

         $this->app->bind(
            'App\repositorios\quarto\contratos\quartoInterface',
            'App\repositorios\quarto\eloquente\quartoRepositorio',
         );

         $this->app->bind(
            'App\repositorios\horaVisita\contratos\horaVisitaInterface',
            'App\repositorios\horaVisita\eloquente\horaVisitaRepositorio',
         );

         $this->app->bind(
            'App\repositorios\disponibilidadeConsulta\contratos\disponibilidadeInterface',
            'App\repositorios\disponibilidadeConsulta\eloquente\disponibilidadeRepositorio',
         );

         $this->app->bind(
            'App\repositorios\consulta\contratos\consultaInterface',
            'App\repositorios\consulta\eloquente\consultaRepositorio',
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
