<?php 
    $nama = array("Gita", "Lina", "Joni", "Toni", 525, 7.5);

    var_dump($nama);
    echo "<br>";

    foreach ($nama as $key) {
        echo $key, "<br>";
    }
    
    $nama = array(
        "Gita" => "Madura",
        "Lina" => "Bekasi",
        "Joni" => "Padang",
        "Toni" => "Surabaya
    );

    var_dump($nama);
    echo "<br>";

    foreach ($nama as $k => $v) {
        echo $k, " = ", $v, "<br>";
    }
?>