<?php
/*
 * Binary Gap
 */
function binaryGap(int $n)
{
  // String dla binarek
  $binary = null;

  // Wersja 1 ( moja ).
  // Przekształcenie liczby całkowitej na system binarny.
  while ($n != 0) {

    if ($n % 2 == 0) {
      // Reszta z dzielenia 0, zwróć 0.
      $binary .= '0';
    } else {
      // Reszta z dzielenia różna od zera (czyli równa 1), zwróć 1.
      $binary .= '1';
    }

    $n = floor($n / 2);
  }
  // Odwróć string, wiadomo dlaczego.
  $binary = strrev($binary);

  // Wersja 2 ( PHP <3 )
  // $binary = decbin($n);

  // Usunięcie początkowych i koncowych zer.
  $binary = trim($binary, '0');

  // Rozdzielenie liczby binarnej znakiem 1.
  $zera = explode('1', $binary);

  // Ilośc zer dla sekcji.
  $zera_ilosc = array_map(function ($n) {
    return strlen($n);
  }, $zera);

  // Zwróć maksymalną wartość tablicy, Binary Gap.
  return max($zera_ilosc);

 // Zrobione .... xD
}
?>
