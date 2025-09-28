<?php 
    // Array Dimensi

    $nama = array("Gita", "Lina", "Toni", "Joni", 525, 7.5);

    var_dump($nama);
    echo "<br>";
    echo $nama[5];
    echo "<br>";

    for ($i=0; $i < 6; $i++) { 
        echo $i, " = ";
        echo $nama[$i], "<br>";
    }

    foreach ($nama as $k) {
        echo $k, "<br>";
    }

    // Array Asosiatif

    $nama = array(
        "Gita" => "Madura",
        "Lina" => "Bekasi",
        "Toni" => "Padang",
        "Joni" => "Surabaya"
    );

    var_dump($nama);
    echo "<br>";
    echo $nama["Joni"];

    foreach ($nama as $k => $v) {
        echo $k, " = ", $v, "<br>";
    }
?>