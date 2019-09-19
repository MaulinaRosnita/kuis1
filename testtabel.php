<?php
include_once(__DIR__ . "/lib/format_data.php");
include_once(__DIR__ . "/lib/tempat_hiburan.php");

$tempat_hiburan = new tempat_hiburan();
$fmt = new FormatData();
echo $fmt->build_table($tempat_hiburan->getAll());