<?php

declare(strict_types= 1);

function isLeapYear(int $year): bool
{
  if(($year%4 !== 0) || ($year%100 === 0 && $year%400!== 0)) {
    return false;
  }
  return true;

  // return (!($year%4) && $year%100) || !($year%400);
}



// This is for 2000
$res = isLeapYear(2000);
var_dump($res);

// This is for 1900
$res = isLeapYear(1900);
var_dump($res);


?>