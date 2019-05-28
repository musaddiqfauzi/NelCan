<?php

include("config.php");

// cek apakah tombol daftar sudah diklik atau blum?
if(isset($_POST['daftar'])){

    // ambil data dari formulir
    $nama = $_POST['nama'];
    $email = $_POST['email'];
    $pass = $_POST['password'];
    
    
    // buat query
    $sql = "INSERT INTO daftar_pengguna (nama, email, password) VALUE ('$nama', '$email', '$pass')";
    $query = mysqli_query($db, $sql);

    // apakah query simpan berhasil?
    if( $query ) {
        // kalau berhasil alihkan ke halaman index.php dengan status=sukses
        header('Location: login.php?status=sukses');
    } else {
        // kalau gagal alihkan ke halaman indek.php dengan status=gagal
        header('Location: sign-up.php?status=gagal');
    }


} else {
    die("Akses dilarang...");
}

?>