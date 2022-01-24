<?php

namespace TiNacional\ModelSys;

use Illuminate\Support\ServiceProvider;
use Illuminate\Foundation\Console\PresetCommand;
use Laravel\Ui\UiCommand; 
use Laravel\Ui\AuthCommand;

class ModelSysServiceProvider extends ServiceProvider
{
    /**
     * Perform post-registration booting of services.
     *
     * @return void
     */
    public function boot()
    {
        UiCommand::macro('material', function ($command) {
            ModelSys::install();
            
            $command->info('Modelo Dashboard scaffolding installed successfully.');
        });
    }

    /**
     * Register any package services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}