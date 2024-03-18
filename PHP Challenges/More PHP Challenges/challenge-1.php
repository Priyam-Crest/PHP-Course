<?php

function getRobotName() : string{
  $letters = range("A","Z");
  
  shuffle($letters);
  $randomLetter = rand(0, count($letters) -1);
  $nextRandomLetter = rand(0, count($letters) -1);
  $number = mt_rand(100,999);

  return "{$letters[$randomLetter]}{$letters[$nextRandomLetter]}{$number}";
}

$res = getRobotName();
echo $res;

?>