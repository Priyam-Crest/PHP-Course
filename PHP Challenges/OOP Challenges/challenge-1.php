<?php

declare(strict_types=1);

class DNA {
  public static function nucleotideCount(string $input): array
  {
    // Converting Input String to Uppercase
    $input = strtoupper($input);
  
    return [
      'A' => substr_count($input,'A'),
      'C' => substr_count($input,'C'),
      'T' => substr_count($input,'T'),
      'G' => substr_count($input,'G'),
    ];
  }
}

// Create an Object Of DNA Class
$myObj = new DNA();

print_r($myObj->nucleotideCount('aggct'));

?>