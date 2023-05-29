<?php 
if (isset($_POST['edit'])){
    include("koneksi.php");

    $get = $_POST['id'];
    $id = $_POST['id'];
    $nomor=$_POST['nomor'];
    $nama = $_POST['nama'];
    $tgl_lahir=$_POST['tgl_lahir'];
    $email = $_POST['email'];
    $alamat = $_POST['alamat'];

    $query = "UPDATE tbl_daftar SET nomor='$nomor', nama= '$nama', tgl_lahir= '$tgl_lahir',email='$email',alamat='$alamat' where id ='$get'";
    $result = mysqli_query($conn, $query);

    if (!$result){
        die("Query gagal dijalankan: ".mysqli_errno($conn)." - ".mysqli_error($conn));
    }
}

header("location:view.php");
?>