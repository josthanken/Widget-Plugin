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
        $this->getApplication()->register(GoogleSiteVerificationRouteServiceProvider::class);
    }
}

