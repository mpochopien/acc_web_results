<?php
header("Content-type: application/json");
ob_start();
require_once("../func/config.php");

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $res = new TracksDict();
    echo json_encode($res->getTrackList());
}
ob_end_flush();