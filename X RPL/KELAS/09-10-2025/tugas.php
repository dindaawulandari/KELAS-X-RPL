<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Web sekolah SPENSAGED</title>
  <link href="pages/bootstrap-5.3.8-dist/css/bootstrap.min.css" rel="stylesheet">

  <style>
    body {
      font-family: 'Poppins', sans-serif;
      background-color: grey;
      margin: 0;
      padding: 0;
    }
    header {
      background-color: blue;
      color: white;
      text-align: center;
      padding: 40px 0;
    }
    section {
      margin-top: 50px;
    }
    footer {
      background: #0d6efd;
      color: white;
      text-align: center;
      padding: 10px;
      margin-top: 50px;
    }
  </style>
</head>
<body>

<?php
$nama_sekolah = "SMPN 1 GEDANGAN";
$alamat = "Jl. Rajawali No.53, Area Sawah, Punggul, Kec. Gedangan, Kabupaten Sidoarjo, Jawa Timur 61254";
$kepala = "Aris Setiawan, S.Pd. M.Pd";
$kelas = ["7A-8A-9A", "7B-8B-9B", "7C-8C-9C", "7D-8D-9D", "7E-8E-9E", "7F-8F-9F", "7G-8G-9G", "7H-8H-9H", "7I-8I-9I"];
$telp = "081-123-4567";
$email = "info@smpn1gedangan.sch.id";
$tahun = date("1984");
?>

<header>
  <h1><?php echo $nama_sekolah; ?></h1>
  <p>Sekolah berkarakter dan berprestasi</p>
</header>

<section class="container">
  <h2 class="text-center mb-3">Profil Sekolah</h2>
  <p>Nama Sekolah: <?php echo $nama_sekolah; ?></p>
  <p>Alamat: <?php echo $alamat; ?></p>
  <p>Kepala Sekolah: <?php echo $kepala; ?></p>
</section>

<section class="container">
  <h2 class="text-center mb-3">Program Keahlian</h2>
  <div class="row text-center">
    <?php 
    foreach ($kelas as $kls) {
      echo "
      <div class='col-md-4 mb-3'>
        <h5>$kls</h5>
        <p>Program $kls di $nama_sekolah siap mencetak lulusan yang berkarakter dan berprestasi.</p>
      </div>
      ";
    }
    ?>
  </div>
</section>

<section class="container mb-5">
  <h2 class="text-center mb-3">Kontak Kami</h2>
  <p>Telepon: <?php echo $telp; ?></p>
  <p>Email: <?php echo $email; ?></p>
  <p>Alamat: <?php echo $alamat; ?></p>
</section>

<!-- Footer -->
<footer>
  <p>&copy; <?php echo $tahun; ?> <?php echo $nama_sekolah; ?> | Dibuat oleh Dinda Dwi Wulandari</p>
</footer>

</body>
</html>