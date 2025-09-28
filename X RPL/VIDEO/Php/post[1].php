<form action="nav.php" method="post

<input type="email" name="email" /><br />

<input type="password" name="password" /><br />

<input type="submit" name="kirim" value="login" />
</form>

<?php 

    if (isset($_POST['kirim'])) {
        $email = $_POST['email'];
    $password = $_POST['password'];
    } else {
        echo "Isi formnya";
    }

?>