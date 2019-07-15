<?php
include 'autoload.php';
include 'config/SystemConfig.php';

$jsonObj = new JsonFileAccessModel('json1');
$json = $jsonObj->readJson();
var_dump($json);
$jsonObj->writeJson($jsonObj);

?>