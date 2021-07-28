<?php

class SiteController {

    public function actionIndex() {

        require_once (ROOT.'/views/index.php');
        return true;
    }

    public function actionWindsurfing() {

        require_once (ROOT.'/views/windsurfing.php');
        return true;
    }

    public function actionKiteboarding() {

        require_once (ROOT.'/views/kiteboarding.php');
        return true;
    }

    public function actionHiking() {

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


}
