<?php namespace SolidLaravel\Providers;

use Illuminate\Support\ServiceProvider;

class InvoiceServiceProvider extends ServiceProvider {

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
     * This service provider is a great spot to register your various container
     * bindings with the application. As you can see, we are registering our
     * "Registrar" implementation here. You can add your own bindings too!
     *
     * @return void
     */
    public function register()
    {
        // App::bind('SolidLaravel\Repositories\Contracts\InvoiceRepositoryInterface','SolidLaravel\Repositories\InvoiceRepositoryDB');
        // App::bind('SolidLaravel\Output\Contracts\InvoiceShowInterface','SolidLaravel\Output\InvoiceShowHtml');
        $this->app->bind(
            'SolidLaravel\Repositories\Contracts\InvoiceRepositoryInterface',
            'SolidLaravel\Repositories\InvoiceRepositoryDB'
        );

        $this->app->bind(
            'SolidLaravel\Output\Contracts\InvoiceShowInterface',
            'SolidLaravel\Output\InvoiceShowHtml'
        );
    }

}
