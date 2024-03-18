<?php

function isArmstrongNumber(int $number): bool
{
  // $digits = str_split((string)$number);
  // $digitCount = count($digits);

  // $digits = array_map(function($digit) use ($digitCount) {
  //   return $digit ** $digitCount;
  // }, $digits);

  // return array_sum($digits) === $number;

// --------Another Method--------
  $digits = (string) $number;
  $digitCount = strlen($digits);
  $sum=0;
  for ($i = 0; $i < $digitCount; $i++) { 
    $sum += $digits[$i] ** $digitCount;
  }
  return $sum === $number;

}

$res = isArmstrongNumber(9);
var_dump($res);

?>