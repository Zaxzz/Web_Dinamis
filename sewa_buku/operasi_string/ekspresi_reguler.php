<!-- Contoh preg_match untuk memvalidasi email<br> -->
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
    Email : <input type="text" name="email"><br>
    <input type="submit" value="Cek">
</form>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    if (empty($_POST["email"])) {
        echo "email harus diisi";
    } else {
        $ekspresi = "/^[_.a-z0-9-]+(\.[_.a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,})$/i";

        if (preg_match($ekspresi, $email))
            echo "Alamat email <b>".$email."</b> valid";
        else
            echo "Alamat email <b>".$email."</b> tidak valid";
    }
}
?>
