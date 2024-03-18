<?php


declare(strict_types= 1);
function colorCode($color){
  // $array = ["black","brown", "red","orange","yellow","green","blue","violet","grey","white"];

  $array = [
    "black" => 0,
    "brown" => 1,
    "red" => 2,
    "orange" => 3,
    "yellow" => 4,
    "green" => 5,
    "blue" => 6,
    "violet" => 7,
    "grey" => 8,
    "white" => 9
  ];

  return $array[$color];
}

$res = colorCode("white");

echo $res;

?>