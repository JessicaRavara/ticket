<?php

require_once 'connection.php';
function getConfig($param){
    $config = require 'config.php';
    // var_dump($config);
    return array_key_exists($params, $config) ? $config[$param] : null; 
}

function getRandName(){
    $names = [
        'Roberto', 'Marco', 'Giovanni', 'Maria', 'Luca', 'Laura'
    ];
    $lastnames = [
        'Rossi', 'Bianchi', 'Verdi', 'Mendoza'
    ];

    $rand1 = mt_rand(0, count($names)-1);
    $rand2 = mt_rand(0, count($lastnames)-1);


    return  $names[$rand1].  ' ' .   $lastnames[$rand2];
}

//echo getRandName();

function getRandEmail($names){
    $domains = [
        'yahoo.com', 'hotmail.it', 'gmail.com', 'libero.it'
    ];

    $rand3 = mt_rand(0, count($domains)-1);

   return mb_strtolower(str_replace (' ','.', $names).mt_rand(19,99).'@'.$domains[$rand3]);
}


//echo getRandEmail(getRandName());

function getRandAge(){
    return mt_rand(18, 80);
}

//echo getRandAge();


//inserisco utenti random in db

function insertRandUser ($totale, mysqli $conn){

    while ($totale> 0){
    $username = getRandName();
    $useremail = getRandEmail($username);
    $userage = getRandAge();

    $sql = 'INSERT INTO users(username, email, age) VALUES ';
    $sql .=  "('$username', '$useremail', $userage)";

    echo $totale .' '-$sql- '<br>';

    $res = $conn->query($sql);
    if(!$res){
        echo 'Errore inserimento utente';
    }else{
        $totale --;
    }
}
}

//insertRandUser(100, $mysqli);

function getUsers (array $params = []){
    $conn =  $GLOBALS['mysqlli'];
    $records = [];
    
    $limit = getConfig('recordsPerPage');
    if ($limit){
        $limit = 10;}

    $sql = 'SELECT * FROM users';

    return $records; 

}