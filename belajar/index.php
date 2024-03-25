<?php

// Fungsi untuk memeriksa apakah sebuah bilangan prima
function isPrime($number) {
    // Bilangan 1 bukan bilangan prima
    if ($number <= 1) {
        return false;
    }
    // Periksa apakah bilangan habis dibagi oleh angka lain selain 1 dan dirinya sendiri
    for ($i = 2; $i <= sqrt($number); $i++) {
        if ($number % $i == 0) {
            return false;
        }
    }
    return true;
}

// Menampilkan bilangan prima dari 1 sampai 100
echo "Bilangan prima dari 1 sampai 100 adalah:<br>";

for ($i = 1; $i <= 100; $i++) {
    if (isPrime($i)) {
        echo "$i adalah bilangan prima.<br>";
    }
}

?>
