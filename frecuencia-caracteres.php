<?php

function mostrarFrecuenciaCaracteres($string)
{
  $caracteres = str_split($string);
  $longitud = count($caracteres);
  $frecuencia = [];

  for ($i = 0; $i < $longitud; $i++) {
    $caracter = $caracteres[$i];

    if (!isset($frecuencia[$caracter])) {
      // Inicializar el contador en uno
      $frecuencia[$caracter] = 1;
    } else {
      $frecuencia[$caracter]++;
    }
  }

  return $frecuencia;
}

print_r(mostrarFrecuenciaCaracteres("alada"));
