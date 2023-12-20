<?php
/* Scrivi uno script PHP per creare un nuovo array di lunghezza nota usando i numeri dispari da un dato array di interi positivi
 */



function test($nums, $count)
{
    $evens = [$count];
    $j = 0;
    
    for ($i = 0; $j < $count; $i++)
    {
        if ($nums[$i] % 2 != 0)
        {
            $evens[$j] = $nums[$i];
            $j++;
        }
    }
    
    return $evens;
}
$result = test([1,2,3,5,7,9,10], 5);

echo "Il nuovo array: ".implode(",", $result);