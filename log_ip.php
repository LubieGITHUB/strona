<?php
// Pobranie adresu IP użytkownika
$ip_address = $_SERVER['REMOTE_ADDR'];

// Ustawienie ścieżki do pliku, w którym będą zapisywane adresy IP
$file = 'numeryip.txt';

// Otwórz plik w trybie "append" (dodawanie na końcu)
$handle = fopen($file, 'a');

// Sprawdzenie, czy plik został otwarty poprawnie
if ($handle) {
    // Zapisz adres IP do pliku z datą i godziną
    $date = date('Y-m-d H:i:s');
    fwrite($handle, "Adres IP: $ip_address - Data: $date\n");
    fclose($handle);
    echo "Adres IP został zapisany: " . $ip_address;
} else {
    echo "Nie można otworzyć pliku do zapisu.";
}
?>
