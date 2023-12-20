<?php
// regola 1 - alemeno 8 caratteri
// regola 2 - almeno una lettera maiuscola
// regola 3 - almeno un carattere speciale
// regola 4 - alemeno un numero


$pwd = readline("inserire la password:");

// regola 1 - alemeno 8 caratteri

function checklenght ($password){
    if( strlen($password) >= 8) {
        return true;
    } else {
        echo "password troppo corta \n";
        return false;
    }
}

// regola 2 - almeno una lettera maiuscola


function checkuppercase($password){

    $confirm = false;
    
    for($i = 0; $i < strlen($password); $i++){
        if(ctype_upper($password[$i])){
            $confirm = true;
        }
    }
    
    if($confirm){
        return true;
    }else{ 
        echo "Inserisci almeno un carattere maisucolo \n";
        return false;
    }

}

// regola 3 - almeno un carattere speciale


function checkspecialchar($password){

    $specialchars = ["!", "$", "%", "@", "#"];
    $confirm = false;
    
    foreach($specialchars as $character){
    if(  str_contains($password, $character)){
        $confirm = true;}  
    };
    if($confirm){
        return true;
        }else{
            echo "Inserisci almeno un carattere speciale \n";
            return false;
    }
}

// regola 4 - alemeno un numero

function checknumber($password){

    $confirm = false;
    
    for($i = 0; $i < strlen($password); $i++){
        if(is_numeric($password[$i])){
            $confirm = true;
        }
    }
    
    if($confirm){
        return true;
        }else{
            echo "Inserisci almeno un numero\n";
            return false;
        }
}

// CHECK PASSWORD FUNCTION

function checkpasword($password){
    $firstrule = checklenght ($password);
    $secondrule = checkuppercase ($password);
    $thirdtrule = checkspecialchar ($password);
    $fourthrule = checknumber ($password);

    if( $firstrule && $secondrule && $thirdtrule && $fourthrule ){
        echo "Password accettata \n";
        return true;
    }else{
        return false;
    }
}
$finalcheck = checkpasword($pwd);
var_dump($finalcheck);

?>