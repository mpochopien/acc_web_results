<?php
header("Content-type: application/json");
ob_start();
require_once("../func/config.php");

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $res = new Results(dbConnection(), new CarsDict());
    echo $res->getResultJson();
}
ob_end_flush();