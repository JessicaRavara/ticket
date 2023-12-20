<?php

/* Scrivi una funzione PHP che verifichi se la stringa passata come argomento sia un palindromo.
 */

// UTILE: il metodo strrev() ritorna la stringa al contrario.

function check_palindrome($string)
{
    // Rimuovi eventuali spazi e trasforma la stringa in minuscolo

$string = strtolower(str_replace(' ', '', $string));

    if ($string == strrev($string))
    return "è palindromo";
    else
    return "non è palindromo";
}; 

echo check_palindrome('otto')."\n";
echo check_palindrome('i topi non avevano nipoti')."\n";
echo check_palindrome('ciao a tutti')."\n";