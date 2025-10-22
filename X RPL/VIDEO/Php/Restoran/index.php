<?php 

    session_start();
    require_once "dbcontroller.php";
    $db = new DB;

    $sql = "SELECT * FROM tblkategori ORDER BY kategori";
    $row = $db -> getALL($sql);
    // var_dump($row);

    if (isset($_GET['log'])) {
        $log = $_GET['log'];
        // echo$log;
        session_destroy();
         echo  '
            <div class="d-flex justify-content-center">
                <div class="alert alert-success text-center w-50 mt-3">
                    Ladies & Gentleman Pelanggan telah berhasil logout, selamat tinggal tuan, hati - hati di jalan
                </div>
            </div>';
        echo "<meta http-equiv='refresh' content='4;url=index.php'>";
    }

    function cart() {
        global $db;

        $cart = 0;

        // var_dump($_SESSION);

        foreach ($_SESSION as $key => $value) {
            if ($key<>'pelanggan' && $key<>'idpelanggan' && $key<>'user' && $key<>'level' && $key<>'iduser') {
                $id = substr($key,1);
                $sql = "SELECT * FROM tblmenu WHERE idmenu=$id";
                $row = $db -> getALL($sql);

                foreach ($row as $r) {
                    $cart++;
                }
            }
        }
        return $cart;
    }
    


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- <link rel="stylesheet" href="../../bootstrap/css/bootstrap.css"> -->
    <title>Restoran SMK Negeri 2 | Aplikasi Restoran SMK</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-3 mt-4">
                <h2><a href="index.php">Restoran SMK</a> </h2>
            </div>

            <div class="col-md-9">
                <?php 
                    if (isset($_SESSION['pelanggan'])) {
                        echo '
                            <div class="float-end mt-4">
                                <a href="?log=logout">Logout</a>
                            </div>

                            <div class="float-end mt-4 me-4">
                                Pelanggan : '.$_SESSION['pelanggan'].'
                            </div>
                            
                            <div class="float-end mt-4 me-4">
                                Cart : ( <a href="?f=home&m=beli"> '. cart() .'</a> ) 
                            </div>

                            <div class="float-end mt-4 me-4">
                                <a href="?f=home&m=history">History</a>
                            </div>
                        ';
                    }else {
                        echo '
                            <div class="float-end mt-4 me-4"><a href="?f=home&m=login">Login</a></div>
                            <div class="float-end mt-4 me-4"><a href="?f=home&m=daftar">Daftar</a></div>
                        ';
                    }
                ?>
                
                
            </div>
        </div>

        <div class="row mt-5">
            <div class="col-md-3">
            <h3>Kategori</h3>
            <hr/>
            <?php if(!empty($row)) { ?>
                <ul class="nav flex-column">
                    <li class="nav-item">
                        <?php foreach($row as $r) : ?>
                        <a class="nav-link" href="?f=home&m=produk&id=<?= $r['idkategori']?>"><?= $r['kategori'] ?></a>
                        <?php endforeach ?>
                    </li>
                    
                </ul>
            <?php } ?>
            </div>

            <div class="col-md-9">
                 <?php 
                    if (isset($_GET['f']) && isset($_GET['m'])) {
                        $f = $_GET['f'];
                        $m = $_GET['m'];
                        $file = $f.'/'.$m.'.php';
                        require_once "$file";
                    }else{
                        require_once "home/produk.php";
                    }
                 ?>
            </div>
        </div>
</body>
</html>