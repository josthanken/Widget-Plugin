<?php

namespace WidgetPlugin\Controllers;


use Plenty\Plugin\Controller;
use Plenty\Plugin\Templates\Twig;

class ContentController extends Controller
{
    public function sayHello(Twig $twig)
    {
        return $twig->render('GoogleSiteVerification::content.hello');
    }
}