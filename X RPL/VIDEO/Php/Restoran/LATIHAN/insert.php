<form action="" method="post">
    Kategori:
    <input type="Text" name="Kategori">
    <br>
    <input type="Submit" name="Simpan" value="Simpan">
</form>

<?php 
    require_once "../function.php";

    if ( isset($_POST["Simpan"])) {
        $kategori = $_POST["kategori"];
        $sql = "INSERT INTO tblkategori VALUES ('','$kategori')";
        $result = mysqli_query($koneksi, $sql);
        
        header("location:http://localhost/restoran/kategori/select.php");
    }
?>