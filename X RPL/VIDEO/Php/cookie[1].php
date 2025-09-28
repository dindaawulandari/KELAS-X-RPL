<?php 
    $cookie_name = "user";
    $cookie_value = "Dedy";

    setcookie($cookie_name, $cookie_value);

    $cookie_value = "Rina";
    setcookie($cookie_name, $cookie_value);

    echo $_COOKIE[$cookie_name];

    setcookie("user", "", time() - 3600);

    echo "<br>";
    var_dump($_COOKIE);
?>