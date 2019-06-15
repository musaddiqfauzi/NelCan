<?php

include("config.php");

// cek apakah tombol daftar sudah diklik atau blum?
// if(isset($_POST['simpan'])){

// ambil data dari formulir
$namaikan = $_POST['namaikan'];
$namapenjual = $_POST['namapenjual'];
$harga  = $_POST['harga'];
$lokasipenjualan = $_POST['lokasipenjualan'];
$foto = $_FILES['foto']['name'];

    $sql = "INSERT INTO data_ikan values ('', '$namaikan', '$namapenjual', '$harga', '$lokasipenjualan', '$foto')";
    $query = mysqli_query($db, $sql);

    move_uploaded_file($_FILES['foto']['tmp_name'], "foto/".$_FILES['foto']['name']);
    // apakah query simpan berhasil?
    if( $query ) {
        // kalau berhasil alihkan ke halaman index.php dengan status=sukses

        header('Location: Laman-cari-ikan.html');
        } else {
        // kalau gagal alihkan ke halaman indek.php dengan status=gagal
        header('Location: Laman-form-ikan.html');
    }


// } else {
//     die("Akses dilarang...");
// }

?>
