<?php


$host=explode('?',$_SERVER['REQUEST_URI'])[0];
$num= substr_count($host,'/');
$path=explode('/',$host)[$num];
$path=clean($path);

$controller = new Controller($path);

$response= $controller -> GetHeader();



switch ($path) 
{		
	case '': $response = $controller -> ProductList(); break;
	case 'add_product': $response = $controller -> AddProduct(); break;
	default: $controller -> ProductList(); break;
}	



$response.= $controller -> GetFooter();







?>
