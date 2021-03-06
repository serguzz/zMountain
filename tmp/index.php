<?php

// FRONT CONTROLLER

// 1. Общие настройки
ini_set('display_errors',1);
error_reporting(E_ALL);

session_start();

// 2. Подключение файлов системы
define('ROOT', dirname(__FILE__));
define('PREFIX','');
define("SUBDOMAIN", "http://travelearth.pp.ua");
require_once(ROOT.'/components/Autoload.php');

// 4. Вызов роутера
$router = new Router();
$router->run();
