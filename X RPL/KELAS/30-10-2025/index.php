<form action="" method="post">
    Tanggal :
    <input type="number" name="tanggal" placeholder="masukkan tanggal"> <br>
    Bulan :
    <input type="number" name="bulan" placeholder="masukkan bulan"> <br>

    <input type="submit" name="kirim" value="zodiak anda ...">
</form>

<form action="" method="post">
    a:
    <input type="number" name="a" placeholder="bilangan a"><br>
    b:
    <input type="number" name="b" placeholder="bilangan b"><br>

    <input type="submit" name="hitung" value="jumlahkan">
    <input type="submit" name="hitung" value="kurangkan">
    <input type="submit" name="hitung" value="kalikan">
    <input type="submit" name="hitung" value="bagikan">
</form>

<?php

    if (isset($_POST['hitung'])) {
        $hitung = $_POST['hitung'];
        $a = $_POST['a'];
        $b = $_POST['b'];

        if ($hitung == 'jumlahkan') {
            echo "Penjumlahan dari $a + $b adalah : <br>";
            echo $a + $b;
        }

        if ($hitung == 'kurangi') {
            echo "Penjumlahan dari $a - $b adalah : <br>";
            echo $a - $b;
        }

        if ($hitung == 'kalikan') {
            echo "Penjumlahan dari $a * $b adalah : <br>";
            echo $a * $b;
        }

        if ($hitung == 'bagikan') {
            echo "Penjumlahan dari $a / $b adalah : <br>";
            echo $a / $b;
        }
    }


    if (isset($_POST['kirim'])) {
        $tanggal = $_POST['tanggal'];
        $bulan = $_POST['bulan'];

        zodiak($bulan, $tanggal);
    }

    function belajar() {
        echo "hari ini saya belajar function";
    }

    function cekTanggal($tanggal){
        
        if ($tanggal > 0 && $tanggal < 32) {
            // echo "tanggal benar";
            return true;
        }else {
         //  echo "tanggl salah";
            return false;
        }
    }

    function zodiak($bulan,$tanggal){
        if ($tanggal > 0 && $tanggal < 32 && $bulan > 0 && $bulan < 13) {
            if ($bulan ==  1) {
                if ($tanggal > 0 && $tanggal < 20) {
                    echo "Zodiak anda capricorn";
                }else {
                    echo "Zodiak anda aquarius";
                }
            }

            if ($bulan == 2) {
                if ($tanggal > 0 && $tanggal < 20) {
                    echo "Zodiak anda aquarius";
                }else {
                    echo "Zodiak anda pisces";
                }
            }

            if ($bulan == 3) {
                if ($tanggal > 0 && $tanggal < 20) {
                    echo "Zodiak anda pisces";
                }else {
                    echo "Zodiak anda aries";
                }
            }

            if ($bulan == 4) {
                if ($tanggal > 0 && $tanggal < 20) {
                    echo "Zodiak anda aries";
                }else {
                    echo "Zodiak anda taurus";
                }
            }

            if ($bulan == 5) {
                if ($tanggal > 0 && $tanggal < 20) {
                    echo "Zodiak anda taurus";
                }else {
                    echo "Zodiak anda gemini";
                }
            }

            if ($bulan == 6) {
                if ($tanggal > 0 && $tanggal < 20) {
                    echo "Zodiak anda gemini";
                }else {
                    echo "Zodiak anda cancer";
                }
            }

            if ($bulan == 7) {
                if ($tanggal > 0 && $tanggal < 20) {
                    echo "Zodiak anda cancer";
                }else {
                    echo "Zodiak anda leo";
                }
            }

            if ($bulan == 8) {
                if ($tanggal > 0 && $tanggal < 20) {
                    echo "Zodiak anda leo";
                }else {
                    echo "Zodiak anda  virgo";
                }
            }

            if ($bulan == 9) {
                if ($tanggal > 0 && $tanggal < 20) {
                    echo "Zodiak anda virgo";
                }else {
                    echo "Zodiak anda libra";
                }
            }

            if ($bulan == 10) {
                if ($tanggal > 0 && $tanggal < 20) {
                    echo "Zodiak anda libra";
                }else{
                    echo "Zodiak anda scorpio";
                }
            }

            if ($bulan == 11) {
                if ($tanggal > 0 && $tanggal < 20) {
                    echo "Zodiak anda scorpio";
                }else{
                    echo "Zodiak anda sagitarius";
                }
            }

            if ($bulan == 12) {
                if ($tanggal > 0 && $tanggal < 20) {
                    echo "Zodiak anda sagitarius";
                }else{
                    echo "Zodiak anda capricorn";
                }
            }
        }else {
            echo 'tanggal atau bulan salah';
        }
    }
    
    function cekBulan($bulan){
        if ($bulan > 0 && $bulan < 13) {
            return true;
        }else{
            return false;
        }
    }

    cekBulan(0);

    if (cekbulan(1) && cekTanggal(4)) {
        echo "Bulan atau tanggal benar";
    }else {
        echo "Bulan atau tanggal salah";
    }

    function luasPersegiPanjang($p, $l) {
        $luas = $p * $l;
        return $luas;
    }

    $p = 55;
    $l = 33;
    $t = 150;

    echo "volume balok dengan panjang $p, lebar $l, dan tinggi $t adalah";

    echo luasPersegiPanjang($p,$l) * $t;


    function penjumlaham($a, $b) {
        return $a + $b;
    }

    function pengurangan($a, $b) {
        return $a - $b;
    }

    function pembagian($a, $b) {
        return $a / $b;
    }

    function perkalian($a, $b) {
        return $a * $b;
    }

    $a = 9;
    $b = 6;

?>