<?php

include 'koneksi.php';

if (isset($_POST['inputpendaftaran'])){
    

    $nomor = $_POST['nomor'];
    $nama = $_POST['nama'];
    $tgl_lahir=$_POST['tgl_lahir'];
    $email = $_POST['email'];
    $alamat = $_POST['alamat'];

    $query = "INSERT INTO tbl_daftar VALUES (null,'$nomor','$nama','$tgl_lahir','$email','$alamat')";
    $result = mysqli_query($conn, $query);

    if(!$result){
        die ("Query gagal dijalankan: ".mysqli_errno($conn)." - ".mysqli_error($conn));
    }

}
header("location:view.php");
?>