<?php
session_start();
require_once("config.php");

if(isset($_POST['login'])){

    $email = $_POST['email'];
    $password = $_POST['password'];
    $sql      = "SELECT * FROM daftar_pengguna WHERE email = '$email'";
    $checkuser  = mysqli_query($db, $sql);
    $hasil    = mysqli_fetch_array($checkuser);


    if( mysqli_num_rows($checkuser) == 0) {
        ?>
        <script language = "JavaScript">
            alert("email tidak terdaftar..");
            document.location='login.php';
        </script>
        <?php
    } else {
        if($password != $hasil['password']) {
            ?>
            <script language = "JavaScript">
                alert("email atau Password Anda Salah..");
                document.location='login.php';
            </script>
            <?php
        } else {
            $_SESSION['email'] = $hasil['email'];
            $_SESSION['password']= $hasil['password'];
            header('location: Laman-tabel-ikan.html');
        }
    }
} else {
    die("Akses dilarang...");
}

?>