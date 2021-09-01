<?php
 


$dbhost = "127.0.0.1";
$dbname = "product_system";
$dbuser = "product_system";
$dbpass = "InxktiFOVcje7XVe"; 



$db = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname) or die(mysqli_error());
mysqli_query ($db,"SET CHARACTER SET 'utf8'");
mysqli_query ($db,"set character_set_client='utf8'");
mysqli_query ($db,"set character_set_results='utf8'");
mysqli_query ($db,"set collation_connection='utf8_general_ci'");
mysqli_query ($db,"SET NAMES utf8");
mysqli_select_db($db,$dbname) or die("Could not find db"); 


?>