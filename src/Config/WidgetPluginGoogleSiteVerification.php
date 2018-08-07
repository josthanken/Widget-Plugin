<?php

namespace WidgetPlugin\Config;

use IO\Helper\PluginConfig;
use Plenty\Plugin\ConfigRepository;

class WidgetPluginGoogleSiteVerification extends PluginConfig
{
    public $googleSiteVerification;

    public function __construct(ConfigRepository $configRepository)
    {
        parent::__construct($configRepository, "WidgetPlugin");

        $this->googleSiteVerification     = $this->getTextValue( "googleSiteVerification" );
    }
}