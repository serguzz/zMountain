<?php

class SiteController {

    public function actionIndex() {

        $page = 1;
        $newsposts = array();
        $newsposts = News::getNewspostsOnPage($page);
        $newspostsCount = count($newsposts);

        require_once (ROOT.'/views/index.php');
        return true;
    }

    public function actionWindsurfing() {

        $page = 1;
        $newsposts = array();
        $newsposts = News::getNewspostsOnPageByTag("windsurfing", $page);
        $newspostsCount = count($newsposts);

        require_once (ROOT.'/views/windsurfing.php');
        return true;
    }

    public function actionKiteboarding() {

        $page = 1;
        $newsposts = array();
        $newsposts = News::getNewspostsOnPageByTag("kiteboarding", $page);
        $newspostsCount = count($newsposts);

        require_once (ROOT.'/views/kiteboarding.php');
        return true;
    }

    public function actionHiking() {

        $page = 1;
        $newsposts = array();
        $newsposts = News::getNewspostsOnPageByTag("hiking", $page);
        $newspostsCount = count($newsposts);

        require_once (ROOT.'/views/hiking.php');
        return true;
    }

    public function actionAbout() {

        require_once (ROOT.'/views/about.php');
        return true;
    }

    public function actionContact() {

        require_once (ROOT.'/views/contact-page.php');
        return true;
    }

    public function actionSandbox() {

        require_once (ROOT.'/views/sandbox.php');
        return true;
    }

// These functions are not nesessary as portfolio section likns to
// files and the routes are not needed.
/*
    public function actionConference() {
        require_once (ROOT.'/portfolio/conference/index.html');
        return true;
    }
    public function actionCalculator() {
        require_once (ROOT.'/portfolio/calculator/index.html');
        return true;
    }
    public function actionGoogle_maps_api() {
        require_once (ROOT.'/portfolio/google_maps_api/index.html');
        return true;
    }
*/

}
