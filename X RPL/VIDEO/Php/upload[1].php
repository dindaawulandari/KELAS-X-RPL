<form action="" method="post" enctype="multipart/form-data">

    pilih file gambar : 
    <input type="file" name="upload" id="file"> <br/>
    <input type="submit" name="kirim" value="simpan">

</form>

<?php 
    if (isset($_POST['kirim'])) {

        $file = $_FILES['upload'];

        var_dump($_FILES['upload']);

        foreach ($file as $key => $value){
            echo $key . ' = ' . $value . "<br>";
        }

        $name = $_FILES['upload']['name'];
        $temp = $_FILES['upload']['tmp_name'];

        move_uploaded_file($temp, 'images/' . $name);

    }
 
?>