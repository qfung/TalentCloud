<?php

date_default_timezone_set('America/Toronto');
error_reporting(E_ALL);
ini_set("display_errors", 1);
set_time_limit(0);

if (!isset($_SESSION)) {
    session_start();
}

/* set api path */
set_include_path(get_include_path() . PATH_SEPARATOR);

require_once '../controller/LocaleController.php';
require_once '../utils/Utils.php';

$requestMethod = filter_input(INPUT_SERVER, 'REQUEST_METHOD', FILTER_SANITIZE_ENCODED);
$requestURI = urldecode(filter_input(INPUT_SERVER, 'REQUEST_URI', FILTER_SANITIZE_ENCODED));

header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=utf-8");
header("Accept: application/json");

$context = '/';

$requestParams = substr($requestURI, strlen($context));

switch ($requestMethod) {
    case 'GET':
        $result = LocaleController::getLocales();
        $json = json_encode($result, JSON_PRETTY_PRINT);
        echo($json);
        break;
    case 'POST':
        //must contain access token to get logged in content
        if (strlen($requestParams) > 1) {
            $locale = Utils::getLocaleFromRequest($requestParams);
            $result = ContentController::getContentByLocale($locale);
            $json = json_encode($result, JSON_PRETTY_PRINT);
            echo($json);
        } else {
            $result = array();
            $json = json_encode($result, JSON_PRETTY_PRINT);
            echo($json);
        }

        break;
    case 'DELETE':
        //Here Handle DELETE Request 
        break;
    case 'PUT':
        //Here Handle PUT Request 
        break;
    case 'OPTIONS':
        //Here Handle OPTIONS/Pre-flight requests
        header("Access-Control-Allow-Headers: accept, content-type");
        header("Access-Control-Allow-Methods: GET");
        echo("");
        break;
}
?>