<?php

namespace WidgetPlugin\Providers;


use plenty\Plugin\ServiceProvider;

class WidgetPluginServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->getApplication()->register(WidgetPluginRouteServiceProvider::class);
    }
}

