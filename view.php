
<?php
    include 'koneksi.php';
?>

<!DOCTYPE html>
    <head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <link rel="stylesheet" href="../home.css">
        <style>
            	body {
			background-color: #F5F5DC;
			font-family: Arial, sans-serif;
			margin: 0;
			padding: 0;
		}

		header {
			background-color:#0000FF;
			color: #fff;
			padding: 20px;
			display: flex;
			justify-content: space-between;
			align-items: center;
		}

		h1 {
			margin: 0;
		}

		nav {
			background-color: black;
			color: #fff;
			padding: 10px;
			display: flex;
			justify-content: space-between;
			align-items: center;
		}

		nav ul {
			list-style-type: none;
			margin: 0;
			padding: 0;
			display: flex;
		}

		nav ul li {
			margin-right: 20px;
		}

		nav ul li a {
			color: white;
			text-decoration: none;
			padding: 10px;
			border-radius: 5px;
			transition: background-color 0.3s ease-in-out;
		}

		nav ul li a:hover {
			background-color:#b60a40 ;
		}

		.search-container {
			display: flex;
			align-items: center;
			position: relative;
		}

		.search-container input[type="text"] {
			padding: 10px;
			border-radius: 5px;
			border: none;
			width: 200px;
		}

		.search-container button {
			background-color: #fff;
			color: #333;
			padding: 10px;
			border-radius: 5px;
			border: none;
			position: absolute;
			right: 0;
		}

        section {
			display: flex;
			flex-wrap: wrap;
			
			justify-content: space-around;
			margin: 20px;
            align-items: center;
		}
        </style>
    </head>
    <body>
    <header>
    <h1>WELLCOME</h1>
		<nav>
			<ul>
			<li><a href="tampilan.php">HOME</a></li>
				<li><a href="daftar.php">DAFTAR</a></li>
				<li><a href="view.php">DATA</a></li>
				<li><a href="logout.php" >KELUAR</a></li>
				
			</ul>
			<div class="search-container">
                <form action="view.php" method="get">
                    <input type="text" placeholder="Cari..." name="cari">
                    <button type="submit" value="cari">SEARCH</button>
                </form>
			</div>
		</nav>
    </header>
    <section>
    <div class="container-fluid mt-3">
            <div class="card">
                <div class="card-header bg-success  table-heading-container">
                    <h1 class="table-heading  float-left text-light text-center"> VIEW DATA</h1>
                    
                </div>
                <div class="card-body table-heading-container">
                    <table class="table">
                        <thead>
                            <tr>
							<th>No</th>
                            <th>NOMOR UJIAN</th>
                            <th>Nama</th>
                           <th>Tanggal lahir</th>
                           <th>EMAIL</th>
                          <th>ALAMAT</th>
                           <th>PILIHAN</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                                if(isset($_GET['cari'])){
                                    $cari = $_GET['cari'];
                                    $query = "SELECT * FROM tbl_daftar WHERE nama='$cari'";				
                                  }else{
                                    $query = "SELECT * FROM tbl_daftar ORDER BY id ASC ";		
                                  }
                                $result = mysqli_query($conn, $query);
                                    $result = mysqli_query($conn, $query);
                        
                                    if(!$result){
                                        die("Query Error: ".mysqli_errno($conn)." - ".mysqli_error($conn));
                                    }
                        
                                    while ($data = mysqli_fetch_assoc($result))
                                    {                      echo "<tr>";
									echo "<td>$data[id]</td>";
                                    echo "<td>$data[nomor]</td>";
                                    echo "<td>$data[nama]</td>";
                                    echo "<td>$data[tgl_lahir]</td>";
                                    echo "<td>$data[email]</td>";
                                    echo "<td>$data[alamat]</td>";
                                    echo '<td>
                                        <a href="edit.php?id='.$data['id'].'" class="btn btn-primary">Edit</a> /
                                        <a href="hapus.php?id='.$data['id'].'" class="btn btn-danger mt-1"
                                            onclick="return confirm(\'Anda yakin akan menghapus data?\')">Delete</a>
                                    </td>';
                                    echo "</tr>"; ?>
                                    
                                <?php }  
                                
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    </section>
       
    </body>
</html>
