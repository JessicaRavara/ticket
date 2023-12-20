<?php

$to = "mario.rossi@gmail.com"; 
$subject= "Mail di test";

$from = "jessica.ravara@icloud.com"; 

$headers = 'MINE-Version 1.0' . "\r\n"; 
$heders = 'Content-type: text/html; charset=iso-8859-1'  . "\r\n"; 

$headers .= 'From: '.$from . "\r\n"; 

$message = '<html><body>';
$message .= '<h2 style="color: red">Titolo della mail</h2>';
$message .= '</body></html>';

if(mail($to, $subject, $message)){
    echo "la mail è stata inviata";
}else{
    echo "Errore durante l'invio della mail"; 
}