<?php

$arrayEnteros = [1, 2, 3, 4, 5, 6, 7, 8];

function sumarPares($arrayEnteros)
{
  $sum = 0;
  foreach ($arrayEnteros as $entero) {
    if ($entero % 2 === 0) {
      $sum += $entero;
    }
  }
  return $sum;
}

print(sumarPares($arrayEnteros));
