<?php

declare(strict_types= 1);

function twoFer(string $name = "You") : string
{
  return "One for {$name}, one for me.";
}

// This is for me 
$res = twoFer("me"). "\n";
echo $res;


// This is for YOu
$res = twoFer();
echo $res;

?>