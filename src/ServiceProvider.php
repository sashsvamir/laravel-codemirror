<?php
namespace Sashsvamir\LaravelCodemirror;


class ServiceProvider extends \Illuminate\Support\ServiceProvider
{

    public function boot(): void
    {
        // load components
        $this->loadViewsFrom([
            __DIR__.'/../resources/views'
        ], 'slbc');
    }

}
