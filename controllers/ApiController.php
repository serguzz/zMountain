<?php

class ApiController {

    public function actionGetService($serviceId) {

        $service = Service::getServiceById($serviceId);

        header('Content-type: application/json');
        echo json_encode( $service );
        return true;

    }

    public function actionGetServicesList() {

        $servicesList = array();
        $servicesList = Service::getServicesList();

        header('Content-type: application/json');
        echo json_encode( $servicesList );
        return true;
    }
}
