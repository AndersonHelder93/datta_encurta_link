<?php

function geradorString() {
  $caracteres = "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz1234567890";
  $tamanho_variavel = strlen($caracteres);
  $random = "https://vsdata.com/";
  for ($i = 0; $i < 5; $i++) {
    $random_str = $caracteres[rand(0, $tamanho_variavel - 1)];
    $random .= $random_str;
  }
  return $random;
}
