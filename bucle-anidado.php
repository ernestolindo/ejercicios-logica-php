<?php

function imprimirPiramideDeAsteriscos($filas)
{
  for ($i = 1; $i <= $filas; $i++) {
    // Imprimir espacios en blanco
    for ($j = 1; $j <= $filas - $i; $j++) {
      echo " ";
    }

    // Imprimir asteriscos
    for ($k = 1; $k <= (2 * $i - 1); $k++) {
      echo "*";
    }

    // Nueva línea después de cada fila
    echo "\n";
  }
}


imprimirPiramideDeAsteriscos(6);
