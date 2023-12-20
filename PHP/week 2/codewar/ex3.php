<?php 

/* Create a method to see whether the string is ALL CAPS. */

function is_uppercase($str) {
    if(empty($str)) return true;
    return ctype_upper(preg_replace('%[^a-zа-я\d]%i','',$str)) ? true : false;
  }

  