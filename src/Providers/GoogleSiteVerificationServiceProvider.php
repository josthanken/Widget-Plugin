<?php

namespace WidgetPlugin\Providers;


use plenty\Plugin\ServiceProvider;

class GoogleSiteVerificationServiceProvider extends ServiceProvider
{

    /**
     * Register the service provider.
     */

    public function register()
    {

    }
}

public function register()
{
    $this->getApplication()->register(GoogleSiteVerificationRouteServiceProvider::class);
}

public function map(Router $router)
{
    $router->get('hello','WidgetPlugin\Controllers\ContentController@sayHello');
}