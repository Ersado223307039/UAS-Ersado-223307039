<?php
require 'koneksi.php';
$email=$_POST["email"];
$password=$_POST["password"];

$query_sql="SELECT * FROM tbl_users WHERE email='$email' AND password='$password'";
$result= mysqli_query($conn,$query_sql);

if(mysqli_num_rows($result)>0){
    header("Location:tampilan.php");
}else {
    echo"<center><h1>Email atau Password anda Salah. Silahkan Coba Login kembali.</h1>
    ";
}
?>
