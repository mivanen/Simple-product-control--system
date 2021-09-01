<?php

function set_msg($text=null, $type=null)
{
	if($text!="")
	{
		$_SESSION['system_msg']="true";
		$_SESSION['msg_text']=$text;
		$_SESSION['msg_type']=$type;

	}
}

function show_msg($status=null)
{

	$text="";
	if($_SESSION['msg_text']!="") $text=clean($_SESSION['msg_text']);
	if($_SESSION['msg_type']!="") $type=clean($_SESSION['msg_type']);
	
	if($text!="" && $status=="true")
	{
	
		$responce="<div class=\"alert ";

		switch ($type) {
			case 'primary':	$responce.="alert-primary"; $type_str="Info"; break;
			case 'success':	$responce.="alert-success"; $type_str="Success"; break;
			case 'danger':	$responce.="alert-danger"; $type_str="Error"; break;
			case 'warning':	$responce.="alert-warning"; $type_str="Waring"; break;	
			default: $responce.="alert-primary"; $type_str="Info";  break;
		}
		$responce.="\" role=\"alert\">";
		$responce.="<strong>".$type_str.":</strong> ".$text;
		$responce.="</div>";
		
			
		$_SESSION['msg_text']="";
		$_SESSION['msg_type']="";
		$_SESSION['system_msg']="false";
		return $responce;	

	}

	

}


function generateCode($length=6, $type=null) 
{	
    $chars = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPRQSTUVWXYZ0123456789";
  	if($type=="num") $chars = "0123456789";
    $code = "";
    $clen = strlen($chars) - 1;  
    while (strlen($code) < $length) {
        $code .= $chars[mt_rand(0,$clen)];  
    }
    return $code;	
}


function clean($value) 
{
    $value = trim($value);
    $value = stripslashes($value);
   	$value = strip_tags($value,"<br><b><u><i><h1><h2><h3><h4><p><a><ul><li><strong><div><span>");
  	return $value;
}


function random_lipsum($amount = 1, $what = 'paras', $start = 0) {
return simplexml_load_file("http://www.lipsum.com/feed/xml?amount=$amount&what=$what&start=$start")->lipsum;
}



?>