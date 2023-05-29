<?php
include 'koneksi.php';

if(isset($_GET['id'])){
    $get =($_GET["id"]);
    $query = "SELECT * FROM tbl_daftar WHERE id='$get'";
    $result = mysqli_query($conn, $query);

    if (!$result){
        die ("Query Error: ".mysqli_errno($conn)." - ".mysqli_error($conn));
    }
    $data = mysqli_fetch_assoc($result);
    $id=$data["id"];
    $nomor = $data["nomor"];
    $nama = $data["nama"];
    $tgl_lahir = $data["tgl_lahir"];
    $email = $data["email"];
    $alamat = $data["alamat"];
    }else{
    header("location:view.php");
}
?>

<!DOCTYPE html>
<html>
    <head>
        <style>
            h1{
                text-align: center;
            }
            .constrainer{
                width: 400px;
                margin: auto;
            }
        </style>
    </head>
    <body>
        <h1>Edit Data</h1>
        <div class="constrainer">
            <form id="form_update" action="proses_edit.php" method="post">
                <fieldset>
                    <legend>Edit Data </legend>
                    <p>id</p>
                    <input type="text" name="id" id="id" value="<?php echo $id; ?>">

                    <p>Nomor</p>
                    <input type="text" name="nomor" id="nomor" value="<?php echo $nomor; ?>">

                    <p>Nama</p>
                    <input type="text"  name="nama" id="nama" value="<?php echo  $nama; ?>">

                   <p>Tanggal Lahir</p>
                   <input type="date" name="tgl_lahir" id="tgl_lahir" value="<?php echo $tgl_lahir; ?>">

                    <p>Email</p>
                    <input type="email" name="email" id="email" value="<?php echo  $email; ?>">

                    <p>Address</p>
                     <input  name="alamat" id="alamat" value="<?php echo $alamat; ?>">
                     
                    
                </fieldset>
                <p>
                    <input type="submit" name="edit" value="Update Data">
                </p>
            </form>
        </div>
    </body>
</html>
