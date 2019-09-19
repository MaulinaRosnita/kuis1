<?php
include_once(__DIR__. "/lib/tempat_hiburan.php");
include_once(__DIR__. "/lib/DataFormat.php");

header("Access-Control-Allow-Origin:*");
$tempat_hiburan = new tempat_hiburan();
$data = $tempat_hiburan->getAll();
 
$format = new DataFormat();
error_reporting(E_ALL ^ E_NOTICE);
if ($_GET['view']=='xml')
{	
	header("Content-Type: application/xml");
	echo $format->asXML($data, 'tempat_hiburan');
} else if ($_GET['view']=='json'){
	header("Content-Type: application/json");
	echo $format->asJSON($data);
} else {
	echo $format->asTable($data);
}