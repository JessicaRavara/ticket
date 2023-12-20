<?php

/* Complete the function/method so that it returns the url with anything after the anchor (#) removed.

example: "www.codewars.com#about" --> "www.codewars.com"*/

function replaceAll($string) {
    return preg_replace('/#.*$/','',$string);
 }

 echo replaceAll('www.codewars.com/about')."\n";