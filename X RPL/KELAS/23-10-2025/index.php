<?php
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div>
        <div>
            <ul>
                <li><a href="?menu=home"></a>home</li>
                <?php
                    if (!isset($_SESSION['email'])){
                    ?>
                <li><a href="?menu=register"></a>register</li>
                <li><a href="?menu=login"></a>login</li>
                <?php
                }else{
                    ?>
                <li><a href="?menu=logout"></a>logout</li>
                <li><a href="?menu=user"></a>user</li>
                <?php
                }
            ?>
            </ul>
        </div>
        <div>
            
        </div>
    </div>
    <?php
    if (isset($_GET['menu'])){
    $isi = $_GET['menu'];
        if ($isi =='home' )
            require_once "23-10-2025/index.php";
        if ($isi =='register' )
            require_once "23-10-2025/register.php";
        if ($isi =='login' )
            require_once "23-10-2025/login.php";
        if ($isi =='logout' )
            require_once "23-10-2025/logout.php";
        if ($isi =='user' )
            require_once "23-10-2025/user.php";
    }
    ?>
</body>
</html>