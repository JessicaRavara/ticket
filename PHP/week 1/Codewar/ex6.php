<?php
/* In this kata you get the start number and the end number of a region and should return the count of all numbers except numbers with a 5 in it. The start and the end number are both inclusive!

Examples:

1,9 -> 1,2,3,4,6,7,8,9 -> Result 8
4,17 -> 4,6,7,8,9,10,11,12,13,14,16,17 -> Result 12 */


function dont_give_me_five($start, $end) {
    $count = 0;

    for ($i = $start; $i <= $end; ++$i) {
        if(stristr((string)$i, '5') === FALSE) {
            $count++;
      }
    }
    return $count;
}


echo dont_give_me_five (4, 17)."\n"; 