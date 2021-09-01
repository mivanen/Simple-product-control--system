<?php 
session_start();

ini_set('error_reporting', E_ALL);
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);

include 'components/functions.php';
include 'controller/controller.php';
include 'route/route.php';

echo $response;  


?>