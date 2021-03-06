<?php

namespace MichaelCooke\Orthrus;

use Illuminate\Support\ServiceProvider;

class OrthrusServiceProvider extends ServiceProvider
{
    /**
     * Perform post-registration booting of services.
     *
     * @return void
     */
    public function boot(): void
    {
        //
    }

    /**
     * Register bindings in the container.
     *
     * @return void
     */
    public function register(): void
    {
        $this->app->singleton('esi', function ($app) {
            return new Orthrus;
        });
    }

    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides(): array
    {
        return [
            'esi',
        ];
    }
}
