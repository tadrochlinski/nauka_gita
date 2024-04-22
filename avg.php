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

// Przykładowe użycie funkcji
$liczby = [10, 20, 30, 40, 50];
echo "Średnia wartość to: " . obliczSrednia($liczby);

?>