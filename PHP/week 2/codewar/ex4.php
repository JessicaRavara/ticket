<?php

/* The first century spans from the year 1 up to and including the year 100, the second century - from the year 101 up to and including the year 200, etc. */

function centuryFromYear($year): int
{
    return ceil($year / 100);
}

echo centuryFromYear(1876)."\n" ;