<!DOCTYPE html>
<html>
<head>
	<title> APLIKASI CRUD </title>
	<style>
		body {
			margin: 0;
    padding: 0;
    background: url(img/home.jpg);
    background-size: cover;
    background-position: center;
    background-repeat: no-repeat;
    background-attachment: fixed;
    font-family: sans-serif;
		}

		header {
			background-color: #0000FF;
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
			position: absolute;
			justify-content: space-around;
			margin: 20px;
		}

		.card {
			background-color: #fff;
			box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
			border-radius: 5px;
			padding: 20px;
			margin-bottom: 20px;
			width: calc(33% - 20px);
		}

		.card h2 {
			margin-top: 0;
		}

		.card p {
			margin: 0;
		}
        input[type=submit] {
            width: 200px;
            box-sizing: border-box;
            border: 2px solid #ccc;
            border-radius: 4px;
            font-size: 16px;
            background-color: navy;
            background-position: 10px 10px; 
            background-repeat: no-repeat;
            padding: 20px 20px 20px 40px;
            -webkit-transition: width 0.4s ease-in-out;
            transition: width 0.4s ease-in-out;
            margin: center;
            color: #fff;
			transition: background-color 0.3s ease-in-out;
        }
		.home{
    height: 80vh;
   
    background-size: cover;
    background-position: center;
    display: flex;
    align-items: center;
    padding: 0 10%;
}
.Home-content{
    max-width: 600px;
}
.Home-content h1{
    font-size: 56px;
    font-weight: 700;
}
.Home-content h3{
    font-size: 32px;
    font-weight: 700;
    color: #00abf0;
}
.Home-content p{
    font-size: 16px;
    margin: 20px 0 40px;
    line-height: 1.2;
}
.Home-content .btn-box{
    display: flex;
    justify-content: space-between;
width: 345px;
height: 50px;
}
.btn-box a{

position: relative;
display: inline-flex;
justify-content: center;
align-items: center;
width: 150px;
height: 100%;
background: #00abf0;
border: 2px solid #00abf0;
border-radius: 8px;
font-size: 19px;
color: #081b29;
text-decoration: none;
font-weight: 600;
letter-spacing: 1px;
z-index: 1;
overflow: hidden;
transition: .5s;
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
				<li><a href="logout.php">KELUAR</a></li>
				
				
			</ul>
			<div class="search-container">
                <form action="view.php" method="get">
                    <input type="text" placeholder="Cari..." name="cari">
                    <button type="submit" value="cari">SEARCH</button>
                </form>
			</div>
		</nav>
	</header>

    <section class="home">
	<div class="Home-content">
            <h1>SELAMAT DATANG</h1>
            <h3>Calon Pendaftar</h3>
            <p>“ silahkan melakukan pendaftarn dengan mengklik tombol dibawah 
				” </p>
            <div class="btn-box">
                <a href="daftar.php">Daftar</a>
               
            </div>
        </div>
            
            
		
	</section>

</body>
</html>
