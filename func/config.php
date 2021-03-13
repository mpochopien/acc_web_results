<?php
require __DIR__ . '/../vendor/autoload.php';

//DATABASE CONFIG
define("db_host", "localhost");

define("db_port", "3306");

define("db_name", "accresults");

define("db_user", "accresults");

define("db_passwd", "kHLCSbt4fS27x9va3Mfq");

function dbConnection(): PDO
{
    try {
        return new PDO('mysql:host=' . db_host . ';dbname=' . db_name . ';charset=utf8;port=' . db_port, db_user, db_passwd);
    }catch (PDOException $e){
        die('Error connection to the database: '.$e);
    }
}

//OTHER CONFIG
define("ver", "1.0");

define("front_ver", "2");