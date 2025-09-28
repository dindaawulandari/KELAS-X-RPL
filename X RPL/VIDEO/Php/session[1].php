<nav>
    <ul>
        <li><a href="?menu=isi">Isi</a></li>
        <li><a href="?menu=hapus">Hapus</a></li>
        <li><a href="?menu=destroy">Destroy</a></li>
    </ul>
</nav>

<?php 
    session_start();

    var_dump($_SESSION);
    echo "<br />";
      
    if (isset($_GET['menu'])) {
       $menu = $_GET['menu'];

       echo "Menu yang dipilih: " . $menu . "<br />";
     
           default:
               echo "Menu tidak diketahui<br />";
       }
    }

    function isiSession(){

    $_SESSION['user'] = "Joni";

    $_SESSION['nama'] = "Joni Setiawan";

    $_SESSION['alamat'] = "Surabaya";

    };

?>