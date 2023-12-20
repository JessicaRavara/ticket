<?php

/* Make a function that will return a greeting statement that uses an input; your program should return, "Hello, <name> how are you doing today?". */

function saluta($name): String {
    return "Hello, " . $name . " how are you doing today?";
  }

  echo saluta("Jessica")."\n"; 