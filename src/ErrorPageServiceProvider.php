<?php

namespace Encore\ErrorPage;

use Illuminate\Support\ServiceProvider;

class ErrorPageServiceProvider extends ServiceProvider
{
    /**
     * {@inheritdoc}
     */
    public function boot(ErrorPage $extension)
    {
        if (! ErrorPage::boot()) {
            return ;
        }

        if ($views = $extension->views()) {
            $this->loadViewsFrom($views, 'errorPage');
        }

        if ($this->app->runningInConsole() && $assets = $extension->assets() && $views = $extension->views()) {
            $this->publishes(
                [$assets => public_path('vendor/laravel-admin-ext/errorPage'),
                $views => base_path('resources/views')    
            ],
                'errorPage'
            );
        }

    }
}