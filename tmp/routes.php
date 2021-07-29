<?php

// returns array of routes like   urlPath/parameters => controller/method/parameters
return array (

  'google_maps_api' => 'site/google_maps_api', //actionGoogle_maps_api in SiteController
  'calculator' => 'site/calculator', //actionCalculator in SiteController
  'conference' => 'site/conference', //actionConference in SiteController
  'blogpost/([0-9]+)' => 'blog/showPost/$1', // actionShowPost в BlogController

  'blog/page-([0-9]+)' => 'blog/index/$1', // actionIndex in BlogController
  'blog' => 'blog/index', //actionIndex in BlogController

  'contact' => 'site/contact', //actionContact in SiteController
  'about' => 'site/about', //actionAbout in SiteController
  'sandbox' => 'site/sandbox', //actionSandbox in SiteController

  'hiking' => 'site/hiking', //actionHiking in SiteController
  'kiteboarding' => 'site/kiteboarding', //actionKiteboarding in SiteController
  'windsurfing' => 'site/windsurfing', //actionWindsurfing in SiteController
  '/' => 'site/index',         // actionIndex в SiteController
  '' => 'site/index',         // actionIndex в SiteController

);
