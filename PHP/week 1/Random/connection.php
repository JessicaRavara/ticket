<?php

$config = require 'config.php'; 
// var_dumo ($config); 
$mysqli = new mysqli(
    $config['mysql_host'],
    $config['mysql_user'],
    $config['mysql_password'],
    $config['mysql_db'],
);

if($mysqli->connect_error){
    die($mysqli->connect_error); 
} else{
    echo "Connected to the database";
    var_dump($mysqli);
}
