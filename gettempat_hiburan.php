<?php
include_once(__DIR__ . "/../lib/tempat_hiburan.php");
include_once(__DIR__ . "/../lib/DataFormat.php");
header('Access-Control-Allow-Origin:*');
$tempat_hiburan = new tempat_hiburan();
if(isset($_GET['id'])){
    $data=$tempat_hiburan->gettempat_hiburan($_GET['id']);
} else {
    $data=$tempat_hiburan->getAll();
}
$format=new DataFormat();

if($_GET['id']=='xml'){
    header('Content-Type: application/xml; charset=utf-8');
    echo $format->asXML($data,'tempat_hiburan');
} else if ($_GET['id']=='json'){
    header('Content-Type: application/json');
    echo $format->asJSON($data);
} else {
    echo $format->asHTML($data);
}

