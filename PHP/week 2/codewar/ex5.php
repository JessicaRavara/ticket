<?php

/* ou get an array of numbers, return the sum of all of the positives ones. */

function positive_sum($arr) {
    $amount_array = count($arr);
    $total = 0;
    for ($i = 0; $i <= $amount_array; $i++) {
      if ($arr[$i] > 0) {
        $total += $arr[$i];
      }
    }
    return $total;
  }