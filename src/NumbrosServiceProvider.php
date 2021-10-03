<?php


namespace Thomzee\Numbros;

use Illuminate\Support\ServiceProvider;

class NumbrosServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->registerService();
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides()
    {
        return [
            'numbros'
        ];
    }

    /**
     * Register service class.
     */
    protected function registerService()
    {
        $this->app->singleton('numbros', function () {
            return new NumbrosService();
        });
        $this->app->alias('numbros', NumbrosService::class);
    }
}
