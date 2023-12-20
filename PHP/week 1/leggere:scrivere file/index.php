<?php

/* r legge il contenuto del file 
r+ leggere e scrivere
w posso scrivere ma va a pulire il contenuto del file
w+ leggere e scrivere e crea il file da 0 se non esiste
a aggiunge in fondo al contenuto del file
 */


$nomeFile ="note.txt";
$testo = "Buongiorno a tutti"; 

if(file_exists($file)){
    $file = fopen($nomeFile, "w");

      //aggiungere un contenuto ad un file
      fwrite($file, $testo); 

   // $content = fread($file, "20"); //20 èm il numero dei caratteri 
    $content = fread($file, filesize($nomeFile) );  // legge tutto il file

echo $content; 
    fclose($file);
} else{
 
    echo "il file non esiste";
}


