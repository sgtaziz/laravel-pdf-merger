<?php

namespace GrofGraf\LaravelPDFMerger\Providers;

use Illuminate\Support\ServiceProvider;
use GrofGraf\LaravelPDFMerger\LaravelPDFMerger;

class PDFMergerServiceProvider extends ServiceProvider
{
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
     * Register services.
     *
     * @return void
     */
    public function register()
    {
      $this->app->singleton(LaravelPDFMerger::class, function ($app) {
          return new LaravelPDFMerger($app['files']);
      });
    }
}
