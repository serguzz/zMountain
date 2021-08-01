<?php

// returns array of routes like   urlPath/parameters => controller/method/parameters
return array (

  PREFIX.'/google_maps_api' => 'site/google_maps_api', //actionGoogle_maps_api in SiteController
  PREFIX.'/calculator' => 'site/calculator', //actionCalculator in SiteController
  PREFIX.'/conference' => 'site/conference', //actionConference in SiteController
  PREFIX.'/blogpost/([0-9]+)' => 'blog/showPost/$1', // actionShowPost в BlogController

  PREFIX.'/blog/page-([0-9]+)/content' => 'blog/pageContent/$1', //actionPageContent in BlogController
  PREFIX.'/blog/page-([0-9]+)' => 'blog/index/$1', // actionIndex in BlogController
  PREFIX.'/blog' => 'blog/index', //actionIndex in BlogController

  PREFIX.'/contact' => 'site/contact', //actionContact in SiteController
  PREFIX.'/about' => 'site/about', //actionAbout in SiteController
  PREFIX.'/sandbox' => 'site/sandbox', //actionSandbox in SiteController

  PREFIX.'/hiking' => 'site/hiking', //actionHiking in SiteController
  PREFIX.'/kiteboarding' => 'site/kiteboarding', //actionKiteboarding in SiteController
  PREFIX.'/windsurfing' => 'site/windsurfing', //actionWindsurfing in SiteController
  PREFIX.'/' => 'site/index',         // actionIndex в SiteController
  PREFIX.'' => 'site/index',         // actionIndex в SiteController

);
