<?php

namespace WidgetPlugin\Providers;


use Plenty\Plugin\ServiceProvider;

class WidgetPluginServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->getApplication()->register(WidgetPluginRouteServiceProvider::class);
    }
}

