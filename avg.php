<?php

function obliczSrednia($tablica) {
    // Sprawdzenie czy tablica nie jest pusta
    if (empty($tablica)) {
        return 0; // Jeśli tablica jest pusta, zwracamy 0
    }
    
    // Obliczenie sumy wszystkich liczb w tablicy
    $suma = array_sum($tablica);
    
    // Obliczenie ilości liczb w tablicy
    $ilosc = count($tablica);
    
    // Obliczenie średniej jako suma dzielona przez ilość
    $srednia = $suma / $ilosc;
    
    return $srednia;
}

function obliczSredniaWazona($liczby, $wagi) {
    // Sprawdzenie czy tablice nie są puste i czy mają taką samą długość
    if (empty($liczby) || empty($wagi) || count($liczby) != count($wagi)) {
        return 0; // Jeśli tablice są puste lub mają różną długość, zwracamy 0
    }
    
    // Obliczenie iloczynu każdej liczby przez odpowiadającą jej wagę
    $iloczyny = array_map(function($liczba, $waga) {
        return $liczba * $waga;
    }, $liczby, $wagi);
    
    // Obliczenie sumy iloczynów
    $suma_iloczynow = array_sum($iloczyny);
    
    // Obliczenie sumy wag
    $suma_wag = array_sum($wagi);
    
    // Obliczenie średniej ważonej jako suma iloczynów dzielona przez sumę wag
    $srednia_wazona = $suma_iloczynow / $suma_wag;
    
    return $srednia_wazona;
}
?>