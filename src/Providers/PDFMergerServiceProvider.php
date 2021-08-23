<?php

namespace GrofGraf\LaravelPDFMerger\Providers;

use Illuminate\Support\ServiceProvider;
use GrofGraf\LaravelPDFMerger\PDFMerger;

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
      $this->app->singleton(PDFMerger::class, function ($app) {
          return new PDFMerger($app['files']);
      });
    }
}
