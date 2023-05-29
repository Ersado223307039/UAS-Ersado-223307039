<?php
  $servername="sql301.epizy.com";
  $username="epiz_34308544";
  $password="Rl861iLLegmVTkA";
  $database="epiz_34308544_users";

    $conn= mysqli_connect($servername,$username,$password,$database);

    if(!$conn){
        die ("koneksi dengan database gagal:".mysqli_connect_errno().
        "-".mysqli_connect_errno());
    }

?>