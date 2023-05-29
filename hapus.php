<?php

include ("koneksi.php");

if (isset($_GET['id'])){
    

    $get = $_GET['id'];

    $query = "DELETE FROM tbl_daftar WHERE id ='$get'";
    $result = mysqli_query($conn, $query);

    if (!$result){
        die("gagal menghapusa data: ".mysqli_errno($conn)." - ".mysqli_error($conn));
    }
}

header("location:view.php");
?>