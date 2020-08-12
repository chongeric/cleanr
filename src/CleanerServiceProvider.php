<?php

namespace Eric\Cleaner;

use Illuminate\Support\ServiceProvider;

class CleanerServiceProvider extends ServiceProvider
{
    public function boot()
    {
        //
    }

    public function register()
    {
        $this->app->singleton('cleaner', function () {
            return new Cleaner();
        });
    }
}
