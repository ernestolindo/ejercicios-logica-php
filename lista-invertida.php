<?php

function invertirLista($arrayNumerico)
{
  return array_reverse($arrayNumerico);
}

$numeros = [1, 2, 3, 4, 5];

print_r(invertirLista($numeros));
