<?php

    echo "test";

    $serviceId = $_GET["id"];
    Service::getServiceById($serviceId);

    header('Content-type: application/json');
    echo json_encode( $data );
