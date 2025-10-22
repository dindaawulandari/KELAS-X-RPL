<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SMKN 2 Buduran</title>
    <link rel="stylesheet" href="bootstrap-5.3.8-dist/css/bootstrap.min.css">
</head>
<body class="bg-light">
    <nav class="bg-primary py-3 shadow-sm text-center">
        <div class="container">
            <h4 class="text-white mb-2 fw-bold">SMKN 2 Buduran</h4>
            <ul class="nav justify-content-center">
                <li class="nav-item"><a class="nav-link text-white" href="?menu=profil">Profil</a></li>
                <li class="nav-item"><a class="nav-link text-white" href="?menu=sejarah">Sejarah</a></li>
                <li class="nav-item"><a class="nav-link text-white" href="?menu=jurusan">Jurusan</a></li>
                <li class="nav-item"><a class="nav-link text-white" href="?menu=prestasi">Prestasi</a></li>
                <li class="nav-item"><a class="nav-link text-white" href="?menu=kegiatan">Kegiatan</a></li>
                <li class="nav-item"><a class="nav-link text-white" href="?menu=kontak">Kontak</a></li>
            </ul>
        </div>
    </nav>
    <main class="container py-5">
        <?php
            if (isset($_GET['menu'])) {
                $isi = $_GET['menu'];
                if ($isi == "profil") require_once "pages/profil.php";
                elseif ($isi == "sejarah") require_once "pages/sejarah.php";
                elseif ($isi == "jurusan") require_once "pages/jurusan.php";
                elseif ($isi == "prestasi") require_once "pages/prestasi.php";
                elseif ($isi == "kegiatan") require_once "pages/kegiatan.php";
                elseif ($isi == "kontak") require_once "pages/kontak.php";
            } else {
                require_once "pages/profil.php";
            }
        ?>
    </main>
    <footer class="bg-primary text-white text-center py-3 mt-auto">
        <p class="mb-0">Web ini dibuat oleh Dinda Dwi Wulandari © 2025</p>
    </footer>
</body>
</html>