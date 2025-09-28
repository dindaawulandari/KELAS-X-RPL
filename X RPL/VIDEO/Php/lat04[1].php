<?php 
    //operator mtk
    $a = 7;
    $b = 5;

    $c = $a + $b; // Penjumlahan
    echo "Hasil $a + $b = $c", "<br>";

    $c = $a - $b; // Pengurangan
    echo "Hasil $a - $b = $c", "<br>";

    $c = $a * $b; // Perkalian
    echo "Hasil $a * $b = $c", "<br>";

    $c = $a / $b; // Pembagian
    echo "Hasil $a / $b = $c", "<br>";
    echo "Hasil Atas $a / $b = ", ceil($c), "<br>";
    echo "Hasil Terdekat $a / $b = ", round($c), "<br>";
    echo "Hasil Bawah $a / $b = ", floor($c), "<br>";

    $c = $a % $b; // Modulus
    echo "Hasil $a % $b = $c", "<br><br>";

    //operator logika
    $c = $a < $b;
    echo $c; //Jika tidak keluar hasilnya false

    $c = $a > $b;
    echo $c.'<br>';

    $c = $d == $e;
    echo $c.'<br>';

    $c = $a != $b;//Tidak sama dengan
    echo $c.'<br>';

    // increment= naik
    $a++;
    echo $a.'<br>';
    //decrement= turun
    $b--;
    echo $b.'<br>';

    //operator string
    $kata = 'Sura';
    $kota = 'baya';

    $hasil = $kata.$kota;

    $hasil .=' KOTA PAHLAWAN';
    echo $hasil;

?>