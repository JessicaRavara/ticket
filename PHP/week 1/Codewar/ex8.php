<!-- Dato un array di utenti con nome, cognome e genere, per ogni utente stampare “Buongiorno Sig. Nome Cognome” o “Buongiorno Sig.ra Nome Cognome” a seconda del genere -->

<?php
$peoples = [
    ["name" => "Maria", "surname" => "Bianchi", "genere" => "Donna"],
    ["name" => "Mario", "surname" => "Rossi", "genere" => "Uomo"],
];

foreach ($peopel as $people){
    $name = $people["name"];
    $surname = $people ["surname"];
    if ($user ["genere"] === "Uomo"){
        echo "buongiorno signor $name $surname \n";
    }
        else {
            echo "buongiorno signora $name $surname \n";
        };
    
}; 
?>