<?php

function slices(string $series, int $size): array
{
  $stringLength = strlen($series);

  if($size > $stringLength || $size < 1) {
    return [];
  }

  $result = [];

  for($i = 0; $i <= $stringLength-$size; $i++){
    $result [] = substr($series, $i, $size);
  }
  return $result;
}

$res = slices("4567",3);
print_r($res);

?>